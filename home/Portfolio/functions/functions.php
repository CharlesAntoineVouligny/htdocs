<?php

function isActive($item, $message)
{
    if (getPage() == $item) {
        echo $message;
    }
}

/**
 * Associates 
 */
function getPageInfo()
{
    global $conn;
    $sql = "SELECT * FROM page WHERE id = " . getPage();
    $result = $conn->query($sql);
    return $result->fetch_assoc();
}
/**
 * Imposes indexation on launch
 */
function setIndex()
{
    $_GET['page'] = getPage();
}
/**
 * Reads the HTTP header/string querry
 */
function getPage()
{
    return $_GET['page'] ?? 0;
}
/**
 * Protects against XSS and other malicious attacks
 */
function html_escape($text): string
{
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8', false); // Return escaped string
}
