<?php

add_action("rest_api_init", "custom_api_endpoints");

function custom_api_endpoints() {
    register_rest_route( "librarydb/v1", "/getallarticles",
    [
        "methods" => WP_REST_Server::READABLE,
        "callback" => "librarydb_getallarticles"
    ]);

    register_rest_route( "librarydb/v1", "/getarticle",
    [
        "methods" => WP_REST_Server::READABLE,
        "callback" => "librarydb_getarticle",
        "args" => ["article_id" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"]]
    ]);

    register_rest_route( "librarydb/v1", "/getoutstandingfine",
    [
        "methods" => WP_REST_Server::READABLE,
        "callback" => "librarydb_getoutstandingfine",
        "args" => ["username" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"], "password" => ["required" => true, "type" => "string", "sanitize_callback" => "sanitize_text_field"]]
    ]);

    register_rest_route( "librarydb/v1", "/getfinehistory",
    [
        "methods" => WP_REST_Server::READABLE,
        "callback" => "librarydb_getfinehistory",
        "args" => ["username" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"], "password" => ["required" => true, "type" => "string", "sanitize_callback" => "sanitize_text_field"]]
    ]);

    register_rest_route( "librarydb/v1", "/getwaitlistedarticles",
    [
        "methods" => WP_REST_Server::READABLE,
        "callback" => "librarydb_getwaitlistedarticles",
        "args" => ["username" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"], "password" => ["required" => true, "type" => "string", "sanitize_callback" => "sanitize_text_field"]]
    ]);

    register_rest_route( "librarydb/v1", "/payfine",
    [
        "methods" => WP_REST_Server::CREATABLE,
        "callback" => "librarydb_payfine",
        "args" => ["username" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"], "password" => ["required" => true, "type" => "string", "sanitize_callback" => "sanitize_text_field"], "payment_amount" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"]]
    ]);

    register_rest_route( "librarydb/v1", "/getborrowedarticles",
    [
        "methods" => WP_REST_Server::READABLE,
        "callback" => "librarydb_getborrowedarticles",
        "args" => ["username" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"], "password" => ["required" => true, "type" => "string", "sanitize_callback" => "sanitize_text_field"]]
    ]);

    register_rest_route( "librarydb/v1", "/getreturnedarticles",
    [
        "methods" => WP_REST_Server::READABLE,
        "callback" => "librarydb_getreturnedarticles",
        "args" => ["username" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"], "password" => ["required" => true, "type" => "string", "sanitize_callback" => "sanitize_text_field"]]
    ]);

    register_rest_route( "librarydb/v1", "/borrowarticle",
    [
        "methods" => WP_REST_Server::CREATABLE,
        "callback" => "librarydb_borrowarticle",
        "args" => ["username" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"], "password" => ["required" => true, "type" => "string", "sanitize_callback" => "sanitize_text_field"], "article_id" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"]]
    ]);

    register_rest_route( "librarydb/v1", "/returnarticle",
    [
        "methods" => WP_REST_Server::CREATABLE,
        "callback" => "librarydb_returnarticle",
        "args" => ["username" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"], "password" => ["required" => true, "type" => "string", "sanitize_callback" => "sanitize_text_field"], "article_id" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"]]
    ]);

    register_rest_route( "librarydb/v1", "/waitlistforarticle",
    [
        "methods" => WP_REST_Server::CREATABLE,
        "callback" => "librarydb_waitlistforarticle",
        "args" => ["username" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"], "password" => ["required" => true, "type" => "string", "sanitize_callback" => "sanitize_text_field"], "article_id" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"]]
    ]);

    register_rest_route( "librarydb/v1", "/cancelarticlewaitlist",
    [
        "methods" => WP_REST_Server::CREATABLE,
        "callback" => "librarydb_cancelarticlewaitlist",
        "args" => ["username" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"], "password" => ["required" => true, "type" => "string", "sanitize_callback" => "sanitize_text_field"], "waitlist_id" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"]]
    ]);

    register_rest_route( "librarydb/v1", "/getallpatronborrowedarticles",
    [
        "methods" => WP_REST_Server::READABLE,
        "callback" => "librarydb_getallpatronborrowedarticles",
        "args" => ["username" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"], "password" => ["required" => true, "type" => "string", "sanitize_callback" => "sanitize_text_field"]]
    ]);

    register_rest_route( "librarydb/v1", "/getallpatronreturnedarticles",
    [
        "methods" => WP_REST_Server::READABLE,
        "callback" => "librarydb_getallpatronreturnedarticles",
        "args" => ["username" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"], "password" => ["required" => true, "type" => "string", "sanitize_callback" => "sanitize_text_field"]]
    ]);

    register_rest_route( "librarydb/v1", "/addarticle",
    [
        "methods" => WP_REST_Server::CREATABLE,
        "callback" => "librarydb_addarticle",
        "args" => ["username" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"], "password" => ["required" => true, "type" => "string", "sanitize_callback" => "sanitize_text_field"], "article_id" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"], "article_name" => ["required" => true, "type" => "string", "sanitize_callback" => "sanitize_text_field"], "article_quantity" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"], "article_type" => ["required" => true, "type" => "string", "sanitize_callback" => "sanitize_text_field"]]
    ]);

    register_rest_route( "librarydb/v1", "/addarticlecopies",
    [
        "methods" => WP_REST_Server::CREATABLE,
        "callback" => "librarydb_addarticlecopies",
        "args" => ["username" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"], "password" => ["required" => true, "type" => "string", "sanitize_callback" => "sanitize_text_field"], "article_id" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"], "article_quantity" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"]]
    ]);

    register_rest_route( "librarydb/v1", "/removearticle",
    [
        "methods" => WP_REST_Server::CREATABLE,
        "callback" => "librarydb_removearticle",
        "args" => ["username" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"], "password" => ["required" => true, "type" => "string", "sanitize_callback" => "sanitize_text_field"], "article_id" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"]]
    ]);

    register_rest_route( "librarydb/v1", "/removearticlecopies",
    [
        "methods" => WP_REST_Server::CREATABLE,
        "callback" => "librarydb_removearticlecopies",
        "args" => ["username" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"], "password" => ["required" => true, "type" => "string", "sanitize_callback" => "sanitize_text_field"], "article_id" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"], "article_quantity" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"]]
    ]);

    register_rest_route( "librarydb/v1", "/adjustpatronfine",
    [
        "methods" => WP_REST_Server::CREATABLE,
        "callback" => "librarydb_adjustpatronfine",
        "args" => ["username" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"], "password" => ["required" => true, "type" => "string", "sanitize_callback" => "sanitize_text_field"], "patron_id" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"], "adjustment_amount" => ["required" => true, "type" => "integer"]]
    ]);

    register_rest_route( "librarydb/v1", "/cancelpatronarticlewaitlist",
    [
        "methods" => WP_REST_Server::CREATABLE,
        "callback" => "librarydb_cancelpatronarticlewaitlist",
        "args" => ["username" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"], "password" => ["required" => true, "type" => "string", "sanitize_callback" => "sanitize_text_field"], "waitlist_id" => ["required" => true, "type" => "integer", "sanitize_callback" => "absint"]]
    ]);
}

function employeeCredentialCheck($request) {
    $employee_id = $request->get_param("username");
    $employee_password = $request->get_param("password");
    $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
    $query = "SELECT * FROM `EMPLOYEE CREDENTIAL` WHERE `EmployeeID` = " . $employee_id . " AND `EmployeePassword` = '" . $employee_password . "'";
    $response = $libraryDB->get_results($libraryDB->prepare($query));
    if (count($response) == 1) return true;
    else return false;
}

function patronCredentialCheck($request) {
    $patron_id = $request->get_param("username");
    $patron_password = $request->get_param("password");
    $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
    $query = "SELECT * FROM `PATRON CREDENTIAL` WHERE `PatronID` = " . $patron_id . " AND `PatronPassword` = '" . $patron_password . "'";
    $response = $libraryDB->get_results($libraryDB->prepare($query));
    if (count($response) == 1) return true;
    else return false;
}

function librarydb_getallarticles($request) {
    $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
    $query = "SELECT ArticleID, ArticleName, ArticleQuantity, ArticleType FROM ARTICLE";
    $response = $libraryDB->get_results($libraryDB->prepare($query));
    return rest_ensure_response($response);
}

function librarydb_getarticle($request) {
    $article_id = $request->get_param("article_id");
    $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
    $query = "SELECT * FROM ARTICLE WHERE ArticleID = " . $article_id;
    $response = $libraryDB->get_results($libraryDB->prepare($query));
    return rest_ensure_response($response);
}

function librarydb_getoutstandingfine($request) {
    if (patronCredentialCheck($request))
    {
        $patron_id = $request->get_param("username");
        $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
        $query = "SELECT `OutstandingFine` FROM `OUTSTANDING FINE` WHERE `PatronID` = " . $patron_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
    }
    else $response = [array("Status"=>"Incorrect Credentials")];
    return rest_ensure_response($response);
}

function librarydb_getfinehistory($request) {
    if (patronCredentialCheck($request))
    {
        $patron_id = $request->get_param("username");
        $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
        $query = "SELECT `TotalFine` FROM `FINE HISTORY` WHERE `PatronID` = " . $patron_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
    }
    else $response = [array("Status"=>"Incorrect Credentials")];
    return rest_ensure_response($response);
}

function librarydb_getwaitlistedarticles($request) {
    if (patronCredentialCheck($request))
    {
        $patron_id = $request->get_param("username");
        $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
        $query = "SELECT * FROM `WAITLIST SYSTEM` WHERE `PatronID` = " . $patron_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
    }
    else $response = [array("Status"=>"Incorrect Credentials")];
    return rest_ensure_response($response);
}

function librarydb_payfine($request) {
    if (patronCredentialCheck($request))
    {
        $patron_id = $request->get_param("username");
        $payment_amount = $request->get_param("payment_amount");
        $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
        $query = "SELECT `OutstandingFine` FROM `OUTSTANDING FINE` WHERE `PatronID` = " . $patron_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
        $outstanding_fine = ((array) $response[0])["OutstandingFine"];
        if ($payment_amount > $outstanding_fine && $outstanding_fine > 0) $query = "UPDATE `OUTSTANDING FINE` SET `OutstandingFine` = " . 0 . " WHERE `OUTSTANDING FINE`.`PatronID` = " . $patron_id;
        else if ($payment_amount < $outstanding_fine && $outstanding_fine > 0) $query = "UPDATE `OUTSTANDING FINE` SET `OutstandingFine` = " . ($outstanding_fine - $payment_amount) . " WHERE `OUTSTANDING FINE`.`PatronID` = " . $patron_id;
        else $query = "";
        $response = $libraryDB->get_results($libraryDB->prepare($query));
        $query = "SELECT `OutstandingFine` FROM `OUTSTANDING FINE` WHERE `PatronID` = " . $patron_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
    }
    else $response = [array("Status"=>"Incorrect Credentials")];
    return rest_ensure_response($response);
}

function librarydb_getborrowedarticles($request) {
    if (patronCredentialCheck($request))
    {
        $patron_id = $request->get_param("username");
        $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
        $query = "SELECT * FROM `BORROW` WHERE `PatronID` = " . $patron_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
    }
    else $response = [array("Status"=>"Incorrect Credentials")];
    return rest_ensure_response($response);
}

function librarydb_getreturnedarticles($request) {
    if (patronCredentialCheck($request))
    {
        $patron_id = $request->get_param("username");
        $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
        $query = "SELECT * FROM `RETURN` WHERE `PatronID` = " . $patron_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
    }
    else $response = [array("Status"=>"Incorrect Credentials")];
    return rest_ensure_response($response);
}

function librarydb_borrowarticle($request) {
    if (patronCredentialCheck($request))
    {
        $patron_id = $request->get_param("username");
        $article_id = $request->get_param("article_id");
        $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
        $query = "SELECT * FROM `BORROW` WHERE `PatronID` = " . $patron_id . " AND `ArticleID` = " . $article_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
        $sameArticleBorrowCount = count($response);
        $query = "SELECT * FROM `RETURN` WHERE `PatronID` = " . $patron_id . " AND `ArticleID` = " . $article_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
        $sameArticleReturnCount = count($response);
        $article_id = $request->get_param("article_id");
        $query = "SELECT `ArticleQuantity` FROM `ARTICLE` WHERE `ArticleID` = " . $article_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
        $availableArticleCopies = ((array) $response[0])["ArticleQuantity"];
        if (($sameArticleBorrowCount == $sameArticleReturnCount) && $availableArticleCopies > 0)
        {
            $query = "INSERT INTO `BORROW` (`PatronID`, `ArticleID`, `BorrowDate`, `ExpectedReturn`) VALUES ('" . $patron_id . "', '" . $article_id . "', '" . date("Y-m-d") . "', '" . date('Y-m-d', strtotime("+7 day")) . "')";
            $response = $libraryDB->get_results($libraryDB->prepare($query));
            $query = "UPDATE `ARTICLE` SET `ArticleQuantity` = '" . ($availableArticleCopies - 1) . "' WHERE `ARTICLE`.`ArticleID` = " . $article_id;
            $response = $libraryDB->get_results($libraryDB->prepare($query));
        }
        else $response = [array("Status"=>"Either there are no available copies for the article (try waitlisting) or you already have a copy borrowed")];
    }
    else $response = [array("Status"=>"Incorrect Credentials")];
    return rest_ensure_response($response);
}

function librarydb_returnarticle($request) {
    if (patronCredentialCheck($request))
    {
        $patron_id = $request->get_param("username");
        $article_id = $request->get_param("article_id");
        $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
        $query = "SELECT * FROM `BORROW` WHERE `PatronID` = " . $patron_id . " AND `ArticleID` = " . $article_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
        $sameArticleBorrowCount = count($response);
        $query = "SELECT * FROM `RETURN` WHERE `PatronID` = " . $patron_id . " AND `ArticleID` = " . $article_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
        $sameArticleReturnCount = count($response);
        if (($sameArticleBorrowCount - 1) == $sameArticleReturnCount)
        {
            $query = "SELECT `ExpectedReturn` FROM `BORROW` WHERE `PatronID` = " . $patron_id . " AND `ArticleID` = " . $article_id . " ORDER BY `ExpectedReturn` DESC";
            $response = $libraryDB->get_results($libraryDB->prepare($query));
            $expectedReturn = ((array) $response[0])["ExpectedReturn"];
            $query = "INSERT INTO `RETURN` (`PatronID`, `ArticleID`, `ExpectedReturn`, `ActualReturn`) VALUES ('" . $patron_id . "', '" . $article_id . "', '" . $expectedReturn . "', '" . date("Y-m-d") . "')";
            $response = $libraryDB->get_results($libraryDB->prepare($query));
            $query = "SELECT `ArticleQuantity` FROM `ARTICLE` WHERE `ArticleID` = " . $article_id;
            $response = $libraryDB->get_results($libraryDB->prepare($query));
            $availableArticleCopies = ((array) $response[0])["ArticleQuantity"];
            $query = "UPDATE `ARTICLE` SET `ArticleQuantity` = '" . ($availableArticleCopies + 1) . "' WHERE `ARTICLE`.`ArticleID` = " . $article_id;
            $response = $libraryDB->get_results($libraryDB->prepare($query));
            $overdueDuration = (date_diff(date_create($expectedReturn), date_create(date("Y-m-d")))->format("%R%a"));
            if ($overdueDuration > 0)
            {
                $query = "SELECT `OutstandingFine` FROM `OUTSTANDING FINE` WHERE `PatronID` = " . $patron_id;
                $response = $libraryDB->get_results($libraryDB->prepare($query));
                $outstanding_fine = ((array) $response[0])["OutstandingFine"];
                $query = "UPDATE `OUTSTANDING FINE` SET `OutstandingFine` = " . ($outstanding_fine + ($overdueDuration)) . " WHERE `OUTSTANDING FINE`.`PatronID` = " . $patron_id;
                $response = $libraryDB->get_results($libraryDB->prepare($query));
                $query = "SELECT `TotalFine` FROM `FINE HISTORY` WHERE `PatronID` = " . $patron_id;
                $response = $libraryDB->get_results($libraryDB->prepare($query));
                $fine_history = ((array) $response[0])["TotalFine"];
                $query = "UPDATE `FINE HISTORY` SET `TotalFine` = " . ($fine_history + ($overdueDuration)) . " WHERE `FINE HISTORY`.`PatronID` = " . $patron_id;
                $response = $libraryDB->get_results($libraryDB->prepare($query));
                $query = "SELECT `OutstandingFine` FROM `OUTSTANDING FINE` WHERE `PatronID` = " . $patron_id;
                $response = $libraryDB->get_results($libraryDB->prepare($query));
            }
            $query = "SELECT * FROM `WAITLIST SYSTEM` WHERE `ArticleID` = " . $article_id;
            $waitlist = $libraryDB->get_results($libraryDB->prepare($query));
            if (count(((array) $waitlist)) > 0)
            {
                $waitlist_id = ((array) $waitlist[0])["WaitlistID"];
                $patron_id = ((array) $waitlist[0])["PatronID"];
                $query = "SELECT `TotalFine` FROM `FINE HISTORY` WHERE `PatronID` = " . $patron_id;
                $response = $libraryDB->get_results($libraryDB->prepare($query));
                $fine_history = ((array) $response[0])["TotalFine"];
                for ($counter = 0; $counter < count(((array) $waitlist)); $counter++)
                {
                    $query = "SELECT `TotalFine` FROM `FINE HISTORY` WHERE `PatronID` = " . ((array) $waitlist[$counter])["PatronID"];
                    $response = $libraryDB->get_results($libraryDB->prepare($query));
                    if ($fine_history > ((array) $response[0])["TotalFine"])
                    {
                        $waitlist_id = ((array) $waitlist[$counter])["WaitlistID"];
                        $patron_id = ((array) $waitlist[$counter])["PatronID"];
                        $fine_history = ((array) $response[0])["TotalFine"];
                    }
                }
                $query = "DELETE FROM `WAITLIST SYSTEM` WHERE `WAITLIST SYSTEM`.`WaitlistID` = " . $waitlist_id;
                $response = $libraryDB->get_results($libraryDB->prepare($query));
                $query = "INSERT INTO `BORROW` (`PatronID`, `ArticleID`, `BorrowDate`, `ExpectedReturn`) VALUES ('" . $patron_id . "', '" . $article_id . "', '" . date("Y-m-d") . "', '" . date('Y-m-d', strtotime("+7 day")) . "')";
                $response = $libraryDB->get_results($libraryDB->prepare($query));
                $query = "SELECT `ArticleQuantity` FROM `ARTICLE` WHERE `ArticleID` = " . $article_id;
                $response = $libraryDB->get_results($libraryDB->prepare($query));
                $availableArticleCopies = ((array) $response[0])["ArticleQuantity"];
                $query = "UPDATE `ARTICLE` SET `ArticleQuantity` = '" . ($availableArticleCopies - 1) . "' WHERE `ARTICLE`.`ArticleID` = " . $article_id;
                $response = $libraryDB->get_results($libraryDB->prepare($query));
            }
        }
        else $response = [array("Status"=>"You do not have a copy of the article to return")];
    }
    else $response = [array("Status"=>"Incorrect Credentials")];
    return rest_ensure_response($response);
}

function librarydb_waitlistforarticle($request) {
    if (patronCredentialCheck($request))
    {
        $patron_id = $request->get_param("username");
        $article_id = $request->get_param("article_id");
        $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
        $query = "SELECT `ArticleQuantity` FROM `ARTICLE` WHERE `ArticleID` = " . $article_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
        $availableArticleCopies = ((array) $response[0])["ArticleQuantity"];
        if ($availableArticleCopies <= 0)
        {
            $query = "INSERT INTO `WAITLIST SYSTEM` (`WaitlistID`, `PatronID`, `ArticleID`) VALUES (RAND(), '" . $patron_id . "', '" . $article_id . "')";
            $response = $libraryDB->get_results($libraryDB->prepare($query));
        }
        else $response = [array("Status"=>"The article has available copies (try borrowing)")];
    }
    else $response = [array("Status"=>"Incorrect Credentials")];
    return rest_ensure_response($response);
}

function librarydb_cancelarticlewaitlist($request) {
    if (patronCredentialCheck($request))
    {
        $patron_id = $request->get_param("username");
        $waitlist_id = $request->get_param("waitlist_id");
        $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
        $query = "DELETE FROM `WAITLIST SYSTEM` WHERE `WAITLIST SYSTEM`.`WaitlistID` = " . $waitlist_id . " AND `PatronID` = " . $patron_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
    }
    else $response = [array("Status"=>"Incorrect Credentials")];
    return rest_ensure_response($response);
}

function librarydb_getallpatronborrowedarticles($request) {
    if (employeeCredentialCheck($request))
    {
        $employee_id = $request->get_param("username");
        $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
        $query = "SELECT * FROM `BORROW`";
        $response = $libraryDB->get_results($libraryDB->prepare($query));
    }
    else $response = [array("Status"=>"Incorrect Credentials")];
    return rest_ensure_response($response);
}

function librarydb_getallpatronreturnedarticles($request) {
    if (employeeCredentialCheck($request))
    {
        $employee_id = $request->get_param("username");
        $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
        $query = "SELECT * FROM `RETURN`";
        $response = $libraryDB->get_results($libraryDB->prepare($query));
    }
    else $response = [array("Status"=>"Incorrect Credentials")];
    return rest_ensure_response($response);
}

function librarydb_addarticle($request) {
    if (employeeCredentialCheck($request))
    {
        $article_id = $request->get_param("article_id");
        $article_name = $request->get_param("article_name");
        $article_quantity = $request->get_param("article_quantity");
        $article_type = $request->get_param("article_type");
        $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
        $query = "INSERT INTO `ARTICLE` (`ArticleID`, `ArticleName`, `ArticleQuantity`, `ArticleType`) VALUES ('" . $article_id . "', '" . $article_name . "', '" . $article_quantity . "', '" . $article_type . "')";
        $response = $libraryDB->get_results($libraryDB->prepare($query));
    }
    else $response = [array("Status"=>"Incorrect Credentials")];
    return rest_ensure_response($response);
}

function librarydb_addarticlecopies($request) {
    if (employeeCredentialCheck($request))
    {
        $article_id = $request->get_param("article_id");
        $article_quantity = $request->get_param("article_quantity");
        $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
        $query = "SELECT `ArticleQuantity` FROM `ARTICLE` WHERE `ArticleID` = " . $article_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
        $availableArticleCopies = ((array) $response[0])["ArticleQuantity"];
        $query = "UPDATE `ARTICLE` SET `ArticleQuantity` = '" . ($availableArticleCopies + $article_quantity) . "' WHERE `ARTICLE`.`ArticleID` = " . $article_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
    }
    else $response = [array("Status"=>"Incorrect Credentials")];
    return rest_ensure_response($response);
}

function librarydb_removearticle($request) {
    if (employeeCredentialCheck($request))
    {
        $article_id = $request->get_param("article_id");
        $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
        $query = "DELETE FROM `WAITLIST SYSTEM` WHERE `ArticleID` = " . $article_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
        $query = "DELETE FROM `BORROW` WHERE `ArticleID` = " . $article_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
        $query = "DELETE FROM `RETURN` WHERE `ArticleID` = " . $article_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
        $query = "DELETE FROM `ARTICLE` WHERE `ARTICLE`.`ArticleID` = " . $article_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
    }
    else $response = [array("Status"=>"Incorrect Credentials")];
    return rest_ensure_response($response);
}

function librarydb_removearticlecopies($request) {
    if (employeeCredentialCheck($request))
    {
        $article_id = $request->get_param("article_id");
        $article_quantity = $request->get_param("article_quantity");
        $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
        $query = "SELECT `ArticleQuantity` FROM `ARTICLE` WHERE `ArticleID` = " . $article_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
        $availableArticleCopies = ((array) $response[0])["ArticleQuantity"];
        $query = "UPDATE `ARTICLE` SET `ArticleQuantity` = '" . ($availableArticleCopies - $article_quantity) . "' WHERE `ARTICLE`.`ArticleID` = " . $article_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
    }
    else $response = [array("Status"=>"Incorrect Credentials")];
    return rest_ensure_response($response);
}

function librarydb_adjustpatronfine($request) {
    if (employeeCredentialCheck($request))
    {
        $patron_id = $request->get_param("patron_id");
        $adjustment_amount = $request->get_param("adjustment_amount");
        $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
        $query = "SELECT `OutstandingFine` FROM `OUTSTANDING FINE` WHERE `PatronID` = " . $patron_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
        $outstanding_fine = ((array) $response[0])["OutstandingFine"];
        $query = "UPDATE `OUTSTANDING FINE` SET `OutstandingFine` = " . ($outstanding_fine + $adjustment_amount) . " WHERE `OUTSTANDING FINE`.`PatronID` = " . $patron_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
        $query = "SELECT `TotalFine` FROM `FINE HISTORY` WHERE `PatronID` = " . $patron_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
        $fine_history = ((array) $response[0])["TotalFine"];
        $query = "UPDATE `FINE HISTORY` SET `TotalFine` = " . ($fine_history + $adjustment_amount) . " WHERE `FINE HISTORY`.`PatronID` = " . $patron_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
    }
    else $response = [array("Status"=>"Incorrect Credentials")];
    return rest_ensure_response($response);
}

function librarydb_cancelpatronarticlewaitlist($request) {
    if (employeeCredentialCheck($request))
    {
        $waitlist_id = $request->get_param("waitlist_id");
        $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
        $query = "DELETE FROM `WAITLIST SYSTEM` WHERE `WAITLIST SYSTEM`.`WaitlistID` = " . $waitlist_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
    }
    else $response = [array("Status"=>"Incorrect Credentials")];
    return rest_ensure_response($response);
}

add_action("wpforms_frontend_output_success", "resetForm", 10, 3);
function resetForm($form_data, $fields, $entry_id) {
    if (absint($form_data["id"]) !== 276 && absint($form_data["id"]) !== 282) return;
    unset($_GET["wpforms_return"], $_POST["wpforms"]["id"]);
    unset($_POST["wpforms"]["fields"]);
    wpforms()->frontend->output( $form_data["id"]);
}

add_action( 'wpforms_process_complete', 'handleFormSubmission', 10, 4 );
function handleFormSubmission( $fields, $entry, $form_data, $entry_id ) {
    if (absint($form_data["id"]) !== 276 && absint($form_data["id"]) !== 282) return;
    else if (absint($form_data["id"]) == 276)
    {
        $article_id = $fields["2"]["value"];
        $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
        $query = "SELECT * FROM `BORROW` WHERE `PatronID` = 8643 AND `ArticleID` = " . $article_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
        $sameArticleBorrowCount = count($response);
        $query = "SELECT * FROM `RETURN` WHERE `PatronID` = 8643 AND `ArticleID` = " . $article_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
        $sameArticleReturnCount = count($response);
        $query = "SELECT `ArticleQuantity` FROM `ARTICLE` WHERE `ArticleID` = " . $article_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
        $availableArticleCopies = ((array) $response[0])["ArticleQuantity"];
        if (($sameArticleBorrowCount == $sameArticleReturnCount) && $availableArticleCopies > 0)
        {
            $query = "INSERT INTO `BORROW` (`PatronID`, `ArticleID`, `BorrowDate`, `ExpectedReturn`) VALUES ('8643', '" . $article_id . "', '" . date("Y-m-d") . "', '" . date('Y-m-d', strtotime("+7 day")) . "')";
            $response = $libraryDB->get_results($libraryDB->prepare($query));
            $query = "UPDATE `ARTICLE` SET `ArticleQuantity` = '" . ($availableArticleCopies - 1) . "' WHERE `ARTICLE`.`ArticleID` = " . $article_id;
            $response = $libraryDB->get_results($libraryDB->prepare($query));
        }
    }
    else if (absint($form_data["id"]) == 282)
    {
        $article_id = $fields["2"]["value"];
        $libraryDB = new wpdb("wordpress", "bI8ZtQK7STdin7lA4NdP", "library_database", "mysql-database");
        $query = "SELECT * FROM `BORROW` WHERE `PatronID` = 8643 AND `ArticleID` = " . $article_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
        $sameArticleBorrowCount = count($response);
        $query = "SELECT * FROM `RETURN` WHERE `PatronID` = 8643 AND `ArticleID` = " . $article_id;
        $response = $libraryDB->get_results($libraryDB->prepare($query));
        $sameArticleReturnCount = count($response);
        if (($sameArticleBorrowCount - 1) == $sameArticleReturnCount)
        {
            $query = "SELECT `ExpectedReturn` FROM `BORROW` WHERE `PatronID` = 8643 AND `ArticleID` = " . $article_id . " ORDER BY `ExpectedReturn` DESC";
            $response = $libraryDB->get_results($libraryDB->prepare($query));
            $expectedReturn = ((array) $response[0])["ExpectedReturn"];
            $query = "INSERT INTO `RETURN` (`PatronID`, `ArticleID`, `ExpectedReturn`, `ActualReturn`) VALUES ('8643', '" . $article_id . "', '" . $expectedReturn . "', '" . date("Y-m-d") . "')";
            $response = $libraryDB->get_results($libraryDB->prepare($query));
            $query = "SELECT `ArticleQuantity` FROM `ARTICLE` WHERE `ArticleID` = " . $article_id;
            $response = $libraryDB->get_results($libraryDB->prepare($query));
            $availableArticleCopies = ((array) $response[0])["ArticleQuantity"];
            $query = "UPDATE `ARTICLE` SET `ArticleQuantity` = '" . ($availableArticleCopies + 1) . "' WHERE `ARTICLE`.`ArticleID` = " . $article_id;
            $response = $libraryDB->get_results($libraryDB->prepare($query));
            $overdueDuration = (date_diff(date_create($expectedReturn), date_create(date("Y-m-d")))->format("%R%a"));
            if ($overdueDuration > 0)
            {
                $query = "SELECT `OutstandingFine` FROM `OUTSTANDING FINE` WHERE `PatronID` = 8643";
                $response = $libraryDB->get_results($libraryDB->prepare($query));
                $outstanding_fine = ((array) $response[0])["OutstandingFine"];
                $query = "UPDATE `OUTSTANDING FINE` SET `OutstandingFine` = " . ($outstanding_fine + ($overdueDuration)) . " WHERE `OUTSTANDING FINE`.`PatronID` = 8643";
                $response = $libraryDB->get_results($libraryDB->prepare($query));
                $query = "SELECT `TotalFine` FROM `FINE HISTORY` WHERE `PatronID` = 8643";
                $response = $libraryDB->get_results($libraryDB->prepare($query));
                $fine_history = ((array) $response[0])["TotalFine"];
                $query = "UPDATE `FINE HISTORY` SET `TotalFine` = " . ($fine_history + ($overdueDuration)) . " WHERE `FINE HISTORY`.`PatronID` = 8643";
                $response = $libraryDB->get_results($libraryDB->prepare($query));
                $query = "SELECT `OutstandingFine` FROM `OUTSTANDING FINE` WHERE `PatronID` = 8643";
                $response = $libraryDB->get_results($libraryDB->prepare($query));
            }
            $query = "SELECT * FROM `WAITLIST SYSTEM` WHERE `ArticleID` = " . $article_id;
            $waitlist = $libraryDB->get_results($libraryDB->prepare($query));
            if (count(((array) $waitlist)) > 0)
            {
                $waitlist_id = ((array) $waitlist[0])["WaitlistID"];
                $patron_id = ((array) $waitlist[0])["PatronID"];
                $query = "SELECT `TotalFine` FROM `FINE HISTORY` WHERE `PatronID` = " . $patron_id;
                $response = $libraryDB->get_results($libraryDB->prepare($query));
                $fine_history = ((array) $response[0])["TotalFine"];
                for ($counter = 0; $counter < count(((array) $waitlist)); $counter++)
                {
                    $query = "SELECT `TotalFine` FROM `FINE HISTORY` WHERE `PatronID` = " . ((array) $waitlist[$counter])["PatronID"];
                    $response = $libraryDB->get_results($libraryDB->prepare($query));
                    if ($fine_history > ((array) $response[0])["TotalFine"])
                    {
                        $waitlist_id = ((array) $waitlist[$counter])["WaitlistID"];
                        $patron_id = ((array) $waitlist[$counter])["PatronID"];
                        $fine_history = ((array) $response[0])["TotalFine"];
                    }
                }
                $query = "DELETE FROM `WAITLIST SYSTEM` WHERE `WAITLIST SYSTEM`.`WaitlistID` = " . $waitlist_id;
                $response = $libraryDB->get_results($libraryDB->prepare($query));
                $query = "INSERT INTO `BORROW` (`PatronID`, `ArticleID`, `BorrowDate`, `ExpectedReturn`) VALUES ('" . $patron_id . "', '" . $article_id . "', '" . date("Y-m-d") . "', '" . date('Y-m-d', strtotime("+7 day")) . "')";
                $response = $libraryDB->get_results($libraryDB->prepare($query));
                $query = "SELECT `ArticleQuantity` FROM `ARTICLE` WHERE `ArticleID` = " . $article_id;
                $response = $libraryDB->get_results($libraryDB->prepare($query));
                $availableArticleCopies = ((array) $response[0])["ArticleQuantity"];
                $query = "UPDATE `ARTICLE` SET `ArticleQuantity` = '" . ($availableArticleCopies - 1) . "' WHERE `ARTICLE`.`ArticleID` = " . $article_id;
                $response = $libraryDB->get_results($libraryDB->prepare($query));
            }
        }
    }
}
