<?php
require('../model/database.php');
require('../model/display_login.php');
require('../model/display_newquestion.php');
require('../model/display_registration');
require('../model/displayquestions.php');
require('../model/edit.php');

include 'view/header.php';

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'showlogin';
    }
}

if ($action == 'display_login')
    {include ('model/display_login.php')};
else if ($action == 'login')
    {include ('view/login.php')};
else if ($action == 'display_registration')
    {include ('model/display_registration.php')};
else if ($action == 'register')
    {include ('view/registration.php')};
else if ($action == 'display_questions')
    {include ('model/displayquestions.php')};
else if ($action == 'display_new_question')
    {include ('model/display_newquestion.php')};
else if ($action == 'create_new_question')
    {include ('view/newquestion.php')};
else if ($action == 'display_edit_question')
    {include ('model/display_edit_question.php')};
else if ($action == 'edit_question')
    {include ('model/edit_question.php')};
else if ($action == 'delete_question')
    {include ('model/delete_question.php')};



{
    $category_id = filter_input(INPUT_GET, 'category_id',
        FILTER_VALIDATE_INT);
    if ($category_id == NULL || $category_id == FALSE) {
        $category_id = 1;
    }
    $current_category = CategoryDB::getCategory($category_id);
    $categories = CategoryDB::getCategories();
    $products = ProductDB::getProductsByCategory($category_id);
    include('product_list.php');
} else if ($action == 'view_product') {
    $categories = CategoryDB::getCategories();
    $product_id = filter_input(INPUT_GET, 'product_id',
        FILTER_VALIDATE_INT);
    $product = ProductDB::getProduct($product_id);
    include('product_view.php');
}

include 'view/footer.php'; ?
?>