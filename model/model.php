<?php
#### functions for companies page#####
// function which prepares the query, executes the query and copies the result
function queryCompanies(){
    $db = dbConnect();
    $req = $db -> prepare("SELECT name, country, VAT FROM companies WHERE id_type_companies='1'");
    $req -> execute();
    return $req;
}

function queryCompaniesProvider(){
    $db = dbConnect();
    $requestp = $db -> prepare("SELECT name, country, VAT FROM companies WHERE id_type_companies='2'");
    $requestp -> execute();
    return $requestp;
}

function queryContact(){
    $db = dbConnect();
    $req = $db -> prepare('SELECT * FROM contacts WHERE last_name="bou"');
    //lance sql query
    $req-> execute();
    $contact = $req -> fetch(PDO::FETCH_ASSOC);
}

function dbConnect()
{
    try{
        $db = new PDO ('mysql:host=database;dbname=Cogip','root','root');
        return $db;
    }
    catch(Exeption $e){
        die('Erreur: '.$e->getMessage());

    }
}