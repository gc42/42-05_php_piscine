$sql = "CREATE TABLE `categories`  (
	`ctg_id` int(11) NOT NULL AUTO_INCREMENT,
	`titre` varchar(255) NOT NULL,
	`text` text NOT NULL
	PRIMARY KEY (`ctg_id`)
);";

<?php
	session_start();
	require_once('conn.php');

	function categories_create(string $titre)
	{
		$err = NULL;
		$db = conn_db();
		if (strlen($titre) < 3 || strlen($titre) > 45)
			$err[] = 'titre';
		if ($err !== NULL)
			return ($err);
		$titre = mysqli_real_escape_string($db, $titre);
		$req = "INSERT INTO categories (titre) VALUES ('$titre')";
		$req = mysqli_query($db, $req);
		return ($req);
	}

	function categories_update(string $oldtitre, string $newtitre)
	{
		$err = NULL;
		$db = conn_db();
		if (strlen($newtitre) < 3 || strlen($newtitre) > 45)
			$err[] = 'titre';
		if ($err !== NULL)
			return ($err);
		$oldtitre = mysqli_real_escape_string($db, $oldtitre);
		$newtitre = mysqli_real_escape_string($db, $newtitre);
		$req = "UPDATE categories SET titre = '$newtitre' WHERE titre = '$oldtitre'";
		$req = mysqli_query($db, $req);
		if ($req !== FALSE)
			return true;
		return ($req);
	}

	function categories_delete(string $titre)
	{
		$db = conn_db();
		$titre = mysqli_real_escape_string($db, $titre);
		$req = "DELETE FROM categories WHERE titre = '$titre'";
		$req = mysqli_query($db, $req);
		return ($req);
	}

	function categories_get(string $titre)
	{
		$db = conn_db();
		$titre = mysqli_real_escape_string($db, $titre);
		$req = "SELECT * FROM categories WHERE titre = '$titre'";
		$req = mysqli_query($db, $req);
		if ($req !== FALSE)
			$req = mysqli_fetch_assoc($req);
		return ($req);
	}

	function categories_get_all()
	{
		$db = conn_db();
		$req = "SELECT * FROM categories ORDER BY titre ASC";
		$req = mysqli_query($db, $req);
		if ($req !== FALSE)
			return mysqli_fetch_all($req, MYSQLI_ASSOC);
		return (null);
	}

    require_once('../model/products.php');
    include('../model/prod_has_cat.php');

    $functions = array('removecategories', 'addcategorie', 'updatecategorie');

    function addcategorie(array $data)
    {
      $err = NULL;
      if (!$data['titre'])
        $err[] = 'titre';
      if ($err !== NULL)
        return $err;
      if (!categories_get($data['titre']))
      {
        if (categories_create($data['titre']) === TRUE)
          return NULL;
        else
          return array('unknown error');
      }
      else
        return array('alreadyexist');
    }

    function updatecategorie(array $data)
    {
      $err = NULL;
      if (!$data['oldtitre'])
        $err[] = 'oldtitre';
      if (!$data['titre'])
        $err[] = 'titre';
      if ($err !== NULL)
        return $err;
      if (categories_get($data['oldtitre']))
      {
        if (categories_update($data['oldtitre'], $data['titre']) === TRUE)
          return NULL;
        else
          return array('Unknow error');
      }
      else
        return array('alreadyexist');
    }

    function removecategories(array $data)
    {

        if ($data['titre']) {
            $cat = categories_get($data['titre']);
            if ($cat) {
                $prods = product_get_bycat($data['titre']);
                if ($prods) {
                    foreach ($prods as $k => $v) {
                        product_clear_byid(intval($v['products_id']));
                    }
                }
                link_prodcat_delete_bycat($cat['id']);
                categories_delete($data['titre']);
            }

        } else
            return array("notexist");
    }

    if ($_POST['from'] && in_array($_POST['from'], $functions)) {
        if (($err = $_POST['from']($_POST))) {
            $str_error = http_build_query($err);
            header('Location: ../' . $_POST['success'] . '.php?' . $str_error);
        } else
            header('Location: ../' . $_POST['success'] . '.php');
    }
?>