<?php
// controller/llistar_categories.php
// 1. Demana les categories al model.
// 2. Les passa a la vista perquè les mostri.

require_once __DIR__ . '/../model/connectaDb.php';
require_once __DIR__ . '/../model/categories.php';

$conn = connectaDb();
$categories = getCategories($conn);

include __DIR__ . '/../views/llistar_categories.php';
