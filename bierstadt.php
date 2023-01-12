<?php

$acceptHeader = $_SERVER['HTTP_ACCEPT'] ?? "";

if (str_contains($acceptHeader, "image/webp")) {
    header('Location: /static/bierstadt2.webp', true, 302);
} else {
    header('Location: /static/bierstadt2.jpg', true, 302);
}