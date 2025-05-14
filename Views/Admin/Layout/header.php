<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineStream - Watch Movies Online</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="../assets/js/main"></script>
</head>
<body>
    <style>
        /* Reset and Base Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #0f0f0f;
    color: #ffffff;
    line-height: 1.6;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

a {
    text-decoration: none;
    color: #ffffff;
    transition: color 0.3s ease;
}

a:hover {
    color: #e50914;
}

ul {
    list-style: none;
}

button {
    cursor: pointer;
    border: none;
    outline: none;
}

img {
    max-width: 100%;
    height: auto;
}

/* Header Styles */
header {
    background-color: rgba(0, 0, 0, 0.9);
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    padding: 15px 0;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
}

header .container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.logo h1 {
    font-size: 28px;
    font-weight: 700;
    color: #e50914;
    letter-spacing: 1px;
}

nav ul {
    display: flex;
}

nav ul li {
    margin-right: 25px;
}

nav ul li a {
    font-size: 16px;
    font-weight: 500;
    padding: 5px 0;
    position: relative;
}

nav ul li a::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 2px;
    background-color: #e50914;
    transition: width 0.3s ease;
}

nav ul li a:hover::after,
nav ul li a.active::after {
    width: 100%;
}

.header-right {
    display: flex;
    align-items: center;
}

.search-box {
    display: flex;
    align-items: center;
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 4px;
    padding: 5px 10px;
    margin-right: 20px;
}

.search-box input {
    background: transparent;
    border: none;
    outline: none;
    color: #ffffff;
    width: 200px;
    padding: 5px;
}

.search-box input::placeholder {
    color: rgba(255, 255, 255, 0.5);
}

.search-box button {
    background: transparent;
    color: rgba(255, 255, 255, 0.5);
    font-size: 16px;
    transition: color 0.3s ease;
}

.search-box button:hover {
    color: #e50914;
}

.user-profile img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #e50914;
}

.mobile-menu-btn {
    display: none;
    font-size: 24px;
    color: #ffffff;
}

/* (255, 255, 255, 0.5);
}

/* Responsive Styles */
@media (max-width: 1024px) {
    .footer-content {
        grid-template-columns: 1fr 1fr;
    }
    
    .footer-social {
        grid-column: span 2;
    }
}

@media (max-width: 768px) {
    nav {
        display: none;
    }
    
    .mobile-menu-btn {
        display: block;
    }
    
    .search-box {
        display: none;
    }
   
}



    </style>