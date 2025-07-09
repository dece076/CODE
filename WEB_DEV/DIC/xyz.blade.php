<?php
echo '
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Invest in Sikkim - The Green Investment Destination</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Additional CSS Files from the new template -->
  <link rel="stylesheet" href="https://industries.sikkim.gov.in/assets/admin/assets/css/backend-plugin.min.css">
  <link rel="stylesheet" href="https://industries.sikkim.gov.in/assets/admin/assets/css/backend.css?v=1.0.0">
  <link rel="stylesheet" href="https://industries.sikkim.gov.in/assets/admin/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
  <!-- FontAwesome CDN Backup -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <link rel="stylesheet" href="https://industries.sikkim.gov.in/assets/admin/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
  <link rel="stylesheet" href="https://industries.sikkim.gov.in/assets/admin/assets/vendor/remixicon/fonts/remixicon.css">
  <link href="https://industries.sikkim.gov.in/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="https://industries.sikkim.gov.in/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="https://industries.sikkim.gov.in/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://industries.sikkim.gov.in/assets/css/style.css" rel="stylesheet">
  <link href="https://industries.sikkim.gov.in/assets/vendor/icofont/icofont.min.css" rel="stylesheet">

  <!-- Original CSS Files -->
  <link href="https://industries.sikkim.gov.in/assets/img/favicon.png" rel="icon">
  <link href="https://industries.sikkim.gov.in/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link href="https://industries.sikkim.gov.in/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://industries.sikkim.gov.in/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="https://industries.sikkim.gov.in/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <style>
    :root {
      /* Primary Colors */
      --primary-green: #2e7d32;
      --nav-green: #28813d;
      --light-green: #4caf50;
      --lighter-green: #81c784;
      --dark-green: #1b5e20;
      --accent-gold: #ffd700;
      
      /* Text Colors */
      --text-dark: #263238;
      --text-medium: #455a64;
      --text-light: #607d8b;
      
      /* Background Colors */
      --bg-light: #f5f7fa;
      --bg-white: #ffffff;
      
      /* New Section Background Colors */
      --bg-cream: #fff8e1;
      --bg-mint: #e8f5e9;
      --bg-pale-blue: #e3f2fd;
      --bg-lavender: #f3e5f5;
      --bg-peach: #fbe9e7;
      
      /* Gradient Colors */
      --gradient-green: linear-gradient(135deg, var(--primary-green) 0%, var(--dark-green) 100%);
      --gradient-gold: linear-gradient(135deg, #ffd700 0%, #ffb300 100%);
      --gradient-light: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
    }
    
    html {
      scroll-behavior: smooth;
    }
    
    /* Modified body styles */
    body {
      font-family: \'Poppins\', sans-serif;
      color: var(--text-medium);
      background-color: var(--bg-light);
      margin: 0;
      padding: 0;
      overflow-x: hidden;
      background-image: linear-gradient(to bottom, var(--bg-light) 0%, #ffffff 100%);
      background-attachment: fixed;
    }
    
    /* Section styling */
    section {
      position: relative;
      padding: 70px 0;
      overflow: hidden;
    }
    
    /* Clean section backgrounds */
    section {
      background-color: var(--bg-white);
      position: relative;
    }
    
    section:before {
      content: \'\';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      opacity: 0;
      z-index: 0;
      pointer-events: none;
    }
    
    /* Section dividers */
    section:not(:last-child):after {
      content: \'\';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 10px;
      background: linear-gradient(90deg, 
        var(--primary-green) 0%, 
        var(--primary-green) 20%, 
        var(--accent-gold) 20%, 
        var(--accent-gold) 40%,
        var(--primary-green) 40%, 
        var(--primary-green) 60%,
        var(--accent-gold) 60%, 
        var(--accent-gold) 80%,
        var(--primary-green) 80%, 
        var(--primary-green) 100%
      );
      opacity: 0.1;
      z-index: 1;
    }
    
    /* Section headers */
    section h2, section h3 {
      position: relative;
      padding-bottom: 15px;
      margin-bottom: 30px;
      color: var(--primary-green);
      font-weight: 700;
    }
    
    section h2:after, section h3:after {
      content: \'\';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 60px;
      height: 4px;
      background: var(--accent-gold);
      border-radius: 2px;
    }
    
    /* Section title decorations */
    .section-title {
      text-align: center;
      margin-bottom: 50px;
      position: relative;
    }
    
    .section-title h2 {
      display: inline-block;
      font-size: 2.2rem;
      font-weight: 800;
      color: var(--primary-green);
      text-transform: uppercase;
      letter-spacing: 1px;
      margin-bottom: 15px;
      padding-bottom: 15px;
    }
    
    .section-title h2:after {
      content: \'\';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 4px;
      background: var(--accent-gold);
      border-radius: 2px;
    }
    
    .section-title p {
      max-width: 700px;
      margin: 0 auto;
      color: var(--text-medium);
      font-size: 1.1rem;
      line-height: 1.6;
    }
    
    /* Section background variations */
    .bg-white-section {
      background-color: var(--bg-white) !important;
    }
    
    .bg-light-section {
      background-color: var(--bg-light) !important;
    }
    
    /* Section containers */
    .section-container, .section-card {
      background-color: var(--bg-white);
      border-radius: 12px;
      padding: 40px;
      margin-bottom: 40px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.05);
      transition: all 0.3s ease;
      border: 1px solid rgba(0,0,0,0.03);
      position: relative;
      overflow: hidden;
    }
    
    .section-container:hover, .section-card:hover {
      box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    }
    
    /* Container variations */
    .container-white {
      background-color: var(--bg-white);
      border: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .container-light {
      background-color: var(--bg-light);
      border: 1px solid rgba(0, 0, 0, 0.05);
    }
    
    .container-accent {
      background-color: white;
      border-top: 3px solid var(--accent-gold);
    }
    
    .container-primary {
      background-color: white;
      border-top: 3px solid var(--primary-green);
    }
    
    /* Top Bar Styles - modified */
    #topbar {
      height: 210px;
      background: white;
      width: 100%;
      position: relative;
      z-index: 996;
      margin-bottom: 0 !important;
      padding: 0;
    }

    #topbar .logo img {
      max-height: 200px;
      margin: 5px 0;
    }

    /* Header & Navigation Styles - modified */
    #header {
      background-color: var(--nav-green);
      width: 100%;
      height: 60px;
      padding: 0;
      margin: 0;
      z-index: 9990;
      position: sticky;
      top: 0;
      box-shadow: none;
    }

    #header .d-flex {
      width: 100%;
      padding: 0;
      margin: 0;
      overflow: visible;
    }

    .navbar {
      padding: 0;
      margin: 0;
      display: flex;
      justify-content: flex-start;
    }

    .navbar ul {
      margin: 0;
      padding: 0;
      display: flex;
      list-style: none;
    }

    .navbar > ul > li {
      position: relative;
    }

    .navbar > ul > li > a {
      display: flex;
      align-items: center;
      padding: 0 8px;
      height: 60px;
      color: #fff;
      font-size: 14px;
      text-transform: uppercase;
      white-space: nowrap;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .navbar > ul > li > a:hover {
      color: var(--accent-gold);
    }

    /* Dropdown styles */
    .navbar .dropdown ul {
      display: block;
      position: absolute;
      left: 0;
      top: 100%;
      margin: 0;
      padding: 5px 0;
      z-index: 99;
      background: #ffffff;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      visibility: hidden;
      opacity: 0;
      min-width: 250px;
      transition: all 0.3s ease;
      border-radius: 4px;
      transform: translateY(10px);
    }

    .navbar .dropdown:hover > ul,
    .navbar .dropdown.active > ul {
      visibility: visible;
      opacity: 1;
      transform: translateY(0);
    }

    .navbar .dropdown ul li {
      min-width: 250px;
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    .navbar .dropdown ul li:last-child {
      border-bottom: none;
    }

    .navbar .dropdown ul a {
      padding: 10px 20px;
      font-size: 14px;
      text-transform: none;
      color: #333;
      display: block;
      transition: all 0.3s ease;
      text-decoration: none;
      font-weight: 500;
      background: transparent;
    }

    .navbar .dropdown ul a:hover {
      color: var(--nav-green);
      background: #f8f9fa;
      padding-left: 25px;
    }

    /* Dropdown arrow */
    .navbar .dropdown > a:after {
      content: "▼";
      font-size: 10px;
      margin-left: 5px;
      position: relative;
      top: -2px;
    }

    /* Hide mobile elements on desktop */
    .mobile-nav-toggle {
      display: none;
    }
    
    .mobile-pagination {
      display: none !important;
    }

    /* Mobile navigation - Hamburger Menu */
    @media (max-width: 991px) {
      /* Hide or minimize topbar on mobile */
      #topbar {
        height: 80px !important;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px 0;
      }
      
      #topbar .logo img {
        max-height: 60px !important;
        margin: 0;
      }
      
      #header {
        position: relative;
        justify-content: space-between;
        align-items: center;
        padding: 0 15px;
      }
      
      /* Mobile navigation toggle button - Force visibility */
      .mobile-nav-toggle {
        display: block !important;
        position: fixed !important;
        top: 90px !important;
        right: 20px !important;
        width: 50px !important;
        height: 50px !important;
        background: var(--nav-green) !important;
        border: 2px solid white !important;
        border-radius: 8px !important;
        cursor: pointer !important;
        z-index: 99999 !important;
        transition: all 0.3s ease !important;
        box-shadow: 0 4px 12px rgba(0,0,0,0.3) !important;
      }
      
      .mobile-nav-toggle:hover {
        background: var(--dark-green) !important;
        transform: scale(1.1) !important;
      }
      
      /* Create hamburger lines */
      .mobile-nav-toggle::before,
      .mobile-nav-toggle::after,
      .mobile-nav-toggle {
        transition: all 0.3s ease !important;
      }
      
      .mobile-nav-toggle::before {
        content: \'\' !important;
        position: absolute !important;
        top: 15px !important;
        left: 12px !important;
        width: 24px !important;
        height: 3px !important;
        background: white !important;
        border-radius: 2px !important;
        box-shadow: 0 8px 0 white, 0 16px 0 white !important;
      }
      
      /* When menu is open, transform to X */
      .mobile-nav-toggle.active::before {
        top: 23px !important;
        transform: rotate(45deg) !important;
        box-shadow: 0 0 0 white !important;
      }
      
      .mobile-nav-toggle.active::after {
        content: \'\' !important;
        position: absolute !important;
        top: 23px !important;
        left: 12px !important;
        width: 24px !important;
        height: 3px !important;
        background: white !important;
        border-radius: 2px !important;
        transform: rotate(-45deg) !important;
      }
      
      /* Hide main navigation by default on mobile */
      .navbar ul {
        display: none;
        position: fixed;
        top: 140px; /* Below topbar and header */
        left: 0;
        right: 0;
        bottom: 0;
        background: var(--nav-green);
        z-index: 9998;
        padding: 20px 0;
        margin: 0;
        list-style: none;
        flex-direction: column;
        overflow-y: auto;
        -webkit-overflow-scrolling: touch;
      }
      
      /* Show navigation when active */
      .navbar.mobile-nav-active ul {
        display: flex !important;
      }
      
      /* Mobile menu backdrop */
      .navbar.mobile-nav-active::before {
        content: \'\';
        position: fixed;
        top: 140px;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 9997;
      }
      
      /* Mobile navigation items */
      .navbar ul li {
        width: 100%;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      }
      
      .navbar ul li:last-child {
        border-bottom: none;
      }
      
      .navbar ul li a {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 18px 25px;
        color: white;
        font-size: 16px;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.3s ease;
        min-height: 60px;
        box-sizing: border-box;
        background: transparent;
      }
      
      .navbar ul li a:hover,
      .navbar ul li a:focus {
        background: rgba(255, 255, 255, 0.1);
        color: var(--accent-gold);
        padding-left: 35px;
      }
      
      /* Dropdown styles for mobile */
      .navbar .dropdown > a::after {
        content: \'+\';
        font-size: 20px;
        font-weight: bold;
        transition: transform 0.3s ease;
      }
      
      .navbar .dropdown.active > a::after {
        transform: rotate(45deg);
      }
      
      .navbar .dropdown ul {
        position: static !important;
        display: none !important;
        background: rgba(0, 0, 0, 0.2) !important;
        box-shadow: none !important;
        border: none !important;
        border-radius: 0 !important;
        padding: 0 !important;
        margin: 0 !important;
        width: 100% !important;
        opacity: 1 !important;
        visibility: visible !important;
        transform: none !important;
      }
      
      .navbar .dropdown.active ul {
        display: block !important;
      }
      
      .navbar .dropdown ul li {
        border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        background: rgba(0, 0, 0, 0.1);
      }
      
      .navbar .dropdown ul li:last-child {
        border-bottom: none;
      }
      
      .navbar .dropdown ul a {
        padding: 15px 45px !important;
        font-size: 15px !important;
        color: rgba(255, 255, 255, 0.9) !important;
        background: transparent !important;
        min-height: 50px !important;
      }
      
      .navbar .dropdown ul a:hover,
      .navbar .dropdown ul a:focus {
        background: rgba(255, 255, 255, 0.1) !important;
        color: var(--accent-gold) !important;
        padding-left: 55px !important;
      }
      
      /* Close button animation */
      .mobile-nav-toggle.bi-x {
        transform: translateY(-50%) rotate(180deg);
      }
      
      /* Smooth animations */
      .navbar ul {
        animation: slideInFromTop 0.3s ease-out;
      }
      
      @keyframes slideInFromTop {
        from {
          opacity: 0;
          transform: translateY(-20px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }
      
      /* Touch-friendly improvements */
      .navbar ul li a {
        touch-action: manipulation;
        -webkit-tap-highlight-color: rgba(255, 255, 255, 0.1);
      }
      
      /* Prevent body scroll when menu is open */
      body.mobile-nav-active {
        overflow: hidden;
      }
    }
    
    /* Breadcrumbs */
    .breadcrumbs {
      padding: 25px 0;
      background: var(--bg-mint);
      box-shadow: 0 3px 10px rgba(0,0,0,0.05);
      margin: 0;
      position: relative;
      border-bottom: 1px solid rgba(76, 175, 80, 0.2);
    }
    
    .breadcrumbs:after {
      content: \'\';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 100%;
      height: 5px;
      background: linear-gradient(90deg, 
        var(--primary-green) 0%, 
        var(--primary-green) 20%, 
        var(--accent-gold) 20%, 
        var(--accent-gold) 40%,
        var(--primary-green) 40%, 
        var(--primary-green) 60%,
        var(--accent-gold) 60%, 
        var(--accent-gold) 80%,
        var(--primary-green) 80%, 
        var(--primary-green) 100%
      );
      opacity: 0.7;
    }
    
    .breadcrumbs h2 {
      margin: 0;
      padding: 0;
      font-size: 32px;
      font-weight: 700;
      color: var(--primary-green);
      position: relative;
      display: inline-block;
      text-shadow: 0 1px 2px rgba(0,0,0,0.05);
    }
    
    .breadcrumbs .d-flex {
      margin: 0;
      padding: 0;
      align-items: center;
      gap: 30px;
    }
    
    .breadcrumbs ol {
      margin: 0;
      padding: 0;
      display: flex;
      list-style: none;
      align-items: center;
    }
    
    .breadcrumbs ol li {
      display: flex;
      align-items: center;
      font-weight: 500;
      color: var(--text-medium);
    }
    
    .breadcrumbs ol li + li:before {
      content: \'/\';
      margin: 0 10px;
      color: var(--text-light);
    }
    
    .breadcrumbs ol li a {
      color: var(--light-green);
      font-weight: 600;
      transition: all 0.3s ease;
    }
    
    .breadcrumbs ol li a:hover {
      color: var(--primary-green);
    }
    
    /* Main Content */
    .inner-page {
      padding: 50px 0;
      background-color: var(--bg-light);
      position: relative;
    }
    
    .inner-page:before {
      content: \'\';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url("data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23000000\' fill-opacity=\'0.02\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
      pointer-events: none;
    }
    
    /* Stats Section */
    .stats-section {
      background: var(--gradient-green);
      color: white;
      padding: 40px 0;
      border-radius: 15px;
      margin-bottom: 40px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.15);
      position: relative;
      overflow: hidden;
    }
    
    .stats-section:before {
      content: \'\';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
      pointer-events: none;
    }
    
    .stat-item {
      text-align: center;
      padding: 25px;
      background: rgba(255,255,255,0.1);
      border-radius: 12px;
      backdrop-filter: blur(5px);
      transition: all 0.3s ease;
      border: 1px solid rgba(255,255,255,0.1);
    }
    
    .stat-item:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.2);
      background: rgba(255,255,255,0.15);
    }
    
    .stat-value {
      font-size: 2.8rem;
      font-weight: 700;
      color: var(--accent-gold);
      margin-bottom: 10px;
      text-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }
    
    .stat-label {
      font-size: 1.1rem;
      opacity: 0.95;
      letter-spacing: 0.5px;
    }
    
    /* Project Controls */
    .controls {
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      margin-bottom: 30px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
    }
    
    .controls input, .controls select {
      padding: 10px 15px;
      border: 1px solid #e0e0e0;
      border-radius: 6px;
      font-size: 0.9rem;
      flex: 1;
      min-width: 200px;
    }
    
    .controls input:focus, .controls select:focus {
      outline: none;
      border-color: var(--light-green);
      box-shadow: 0 0 0 2px rgba(76, 175, 80, 0.2);
    }
    
    /* Project Grid */
    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 30px;
    }
    
    .card {
      background-color: white;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      transition: all 0.4s ease;
      border: 1px solid rgba(0,0,0,0.05);
      position: relative;
    }
    
    .card:before {
      content: \'\';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: var(--gradient-green);
      z-index: 1;
      opacity: 0;
      transition: all 0.3s ease;
    }
    
    /* Removed hover effects */
    
    .card {
      background-color: white;
      border-color: rgba(0, 0, 0, 0.08);
    }
    
    .card-img {
      height: 200px;
      background-size: cover;
      background-position: center;
      position: relative;
      transition: all 0.5s ease;
    }
    
    /* Removed card image hover effect */
    
    .card-img::after {
      content: \'\';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 60%;
      background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
    }
    
    .card-content {
      padding: 25px;
      position: relative;
    }
    
    .card h3 {
      color: var(--primary-green);
      margin-bottom: 15px;
      font-size: 1.3rem;
      font-weight: 600;
      position: relative;
      padding-bottom: 10px;
    }
    
    .card h3:after {
      content: \'\';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 40px;
      height: 3px;
      background: var(--accent-gold);
    }
    
    .card p {
      margin-bottom: 12px;
      font-size: 0.95rem;
      color: var(--text-medium);
      line-height: 1.6;
    }
    
    .card p strong {
      color: var(--text-dark);
      font-weight: 600;
    }
    
    .card-tag {
      display: inline-block;
      padding: 5px 12px;
      border-radius: 999px;
      margin-right: 8px;
      margin-bottom: 4px;
      transition: all 0.3s ease;
    }
    
    .card-tag-department {
      background-color: #EDF4ED;
      color: #207A3E;
      font-weight: 500;
      font-size: 0.85rem;
      border: 1px solid #DCE5DD;
    }
    
    .card-tag-mode {
      background-color: #F6F6F6;
      color: #333333;
      font-weight: 400;
      font-size: 0.8rem;
      border: 1px solid #E0E0E0;
    }
    
    .card-tag:hover {
      box-shadow: 0 1px 5px rgba(0,0,0,0.06);
    }
    
    /* Modal */
    .modal {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0,0,0,0.5);
      z-index: 1000;
      justify-content: center;
      align-items: center;
    }
    
    .modal-content {
      background-color: white;
      padding: 30px;
      border-radius: 10px;
      max-width: 600px;
      width: 90%;
      max-height: 80vh;
      overflow-y: auto;
      box-shadow: 0 5px 30px rgba(0,0,0,0.3);
      position: relative;
    }
    
    .modal h2 {
      color: var(--primary-green);
      margin-bottom: 20px;
      padding-bottom: 10px;
      border-bottom: 2px solid var(--lighter-green);
    }
    
    .modal p {
      margin-bottom: 15px;
      line-height: 1.6;
    }
    
    .modal p strong {
      color: var(--text-dark);
      min-width: 120px;
      display: inline-block;
    }
    
    .modal button {
      background-color: var(--primary-green);
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 20px;
      transition: all 0.3s;
    }
    
    .modal button:hover {
      background-color: var(--dark-green);
    }
    
    /* Pre-footer */
    .pre-footer {
      background: var(--gradient-green);
      color: white;
      padding: 80px 0;
      margin-top: 80px;
      position: relative;
      overflow: hidden;
    }
    
    .pre-footer:before {
      content: \'\';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url("data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.05\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
      opacity: 0.1;
    }
    
    .pre-footer h3 {
      color: var(--accent-gold);
      margin-bottom: 25px;
      font-weight: 700;
      font-size: 2rem;
      text-shadow: 0 2px 4px rgba(0,0,0,0.2);
      position: relative;
      display: inline-block;
    }
    
    .pre-footer h3:after {
      content: \'\';
      position: absolute;
      bottom: -10px;
      left: 0;
      width: 80px;
      height: 4px;
      background: rgba(255,255,255,0.3);
      border-radius: 2px;
    }
    
    .pre-footer p {
      margin-bottom: 25px;
      opacity: 0.95;
      font-size: 1.1rem;
      line-height: 1.8;
      text-shadow: 0 1px 2px rgba(0,0,0,0.1);
    }
    
    .pre-footer .btn-outline-light {
      border: 2px solid rgba(255,255,255,0.5);
      color: white;
      transition: all 0.3s;
      padding: 12px 30px;
      font-weight: 600;
      border-radius: 50px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }
    
    .pre-footer .btn-outline-light:hover {
      background-color: white;
      color: var(--primary-green);
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    }
    
    .feature-list {
      list-style-type: none;
      padding: 0;
    }
    
    .feature-list li {
      position: relative;
      padding-left: 35px;
      margin-bottom: 18px;
      font-size: 1.05rem;
      transition: all 0.3s ease;
    }
    
    .feature-list li:hover {
      transform: translateX(5px);
    }
    
    .feature-list li:before {
      content: \'\';
      position: absolute;
      left: 0;
      top: 5px;
      width: 20px;
      height: 20px;
      background-image: url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 24 24\' fill=\'%23FFD700\'%3E%3Cpath d=\'M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z\'/%3E%3C/svg%3E");
      background-size: contain;
      filter: drop-shadow(0 1px 2px rgba(0,0,0,0.3));
    }
    
    /* Footer */
    .footer-top {
      background-color: var(--bg-mint);
      padding: 60px 0;
      border-top: 5px solid rgba(76, 175, 80, 0.2);
    }
    
    .footer-links h4 {
      color: var(--primary-green);
      margin-bottom: 25px;
      font-weight: 600;
      position: relative;
      padding-bottom: 15px;
      font-size: 1.3rem;
    }
    
    .footer-links h4:after {
      content: \'\';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 50px;
      height: 3px;
      background: var(--accent-gold);
    }
    
    .footer-links ul {
      list-style: none;
      padding: 0;
    }
    
    .footer-links li {
      margin-bottom: 10px;
    }
    
    .footer-links a {
      color: var(--text-light);
      transition: all 0.3s;
    }
    
    .footer-links a:hover {
      color: var(--primary-green);
      padding-left: 5px;
    }
    
    .footer-bottom {
      background-color: var(--dark-green);
      color: white;
      padding: 25px 0;
      text-align: center;
      position: relative;
    }
    
    .footer-bottom:before {
      content: \'\';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 5px;
      background: linear-gradient(90deg, 
        var(--accent-gold) 0%, 
        var(--accent-gold) 20%, 
        var(--lighter-green) 20%, 
        var(--lighter-green) 40%,
        var(--accent-gold) 40%, 
        var(--accent-gold) 60%,
        var(--lighter-green) 60%, 
        var(--lighter-green) 80%,
        var(--accent-gold) 80%, 
        var(--accent-gold) 100%
      );
      opacity: 0.7;
    }
    
    /* Why Invest Section Styles */
    .why-invest-section {
      position: relative;
      padding: 60px 40px;
      background-color: var(--bg-cream);
      border-radius: 16px;
      margin-bottom: 50px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.08);
      overflow: hidden;
    }
    
    .why-invest-section:before {
      content: \'\';
      position: absolute;
      top: -50px;
      right: -50px;
      width: 200px;
      height: 200px;
      background: radial-gradient(circle, rgba(255, 215, 0, 0.2) 0%, rgba(255, 215, 0, 0) 70%);
      border-radius: 50%;
      pointer-events: none;
    }
    
    .why-invest-section h3 {
      color: var(--primary-green);
      font-size: 2rem;
      font-weight: 700;
      margin-bottom: 25px;
      position: relative;
      padding-bottom: 15px;
    }
    
    .why-invest-section h3:after {
      content: \'\';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 80px;
      height: 4px;
      background: var(--accent-gold);
      border-radius: 2px;
    }
    
    .why-invest-section p {
      font-size: 1.1rem;
      line-height: 1.8;
      color: var(--text-medium);
      margin-bottom: 30px;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
      .grid {
        grid-template-columns: 1fr;
      }
      
      .controls {
        flex-direction: column;
      }
      
      .controls input, .controls select {
        width: 100%;
      }
    }

    /* Hero Banner Styles */
    .hero-banner {
      position: relative;
      z-index: 1;
      height: 100vh;
      min-height: 600px;
      background-image: url(\'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80\');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      display: flex;
      align-items: center;
      margin-top: 0;
      transition: all 0.8s ease-out;
    }

    .hero-banner:before {
      content: \'\';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(135deg, rgba(27, 94, 32, 0.8) 0%, rgba(46, 125, 50, 0.7) 100%);
      z-index: 1;
    }

    .hero-banner:after {
      content: \'\';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-image: url("data:image/svg+xml,%3Csvg width=\'100\' height=\'100\' viewBox=\'0 0 100 100\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cpath d=\'M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z\' fill=\'%23ffffff\' fill-opacity=\'0.05\' fill-rule=\'evenodd\'/%3E%3C/svg%3E");
      z-index: 1;
      opacity: 0.3;
    }

    .hero-banner .overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(to bottom, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.6) 100%);
      z-index: 1;
    }

    .banner-content {
      position: relative;
      z-index: 2;
      text-align: center;
      color: white;
      padding: 0 20px;
      opacity: 1;
      transform: translateY(0);
      transition: all 0.5s ease-out;
      max-width: 800px;
      margin: 0 auto;
    }

    .banner-content.fade-out {
      opacity: 0;
      transform: translateY(-20px);
    }

    .hero-banner.fade-out {
      opacity: 0.3;
    }

    .banner-content h1 {
      font-size: 4.5rem;
      font-weight: 800;
      margin-bottom: 25px;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
      letter-spacing: 1px;
      position: relative;
      display: inline-block;
    }

    .banner-content h1:after {
      content: \'\';
      position: absolute;
      bottom: -15px;
      left: 50%;
      transform: translateX(-50%);
      width: 100px;
      height: 5px;
      background: var(--accent-gold);
      border-radius: 3px;
    }

    .banner-content p {
      font-size: 1.6rem;
      margin-bottom: 40px;
      text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
      font-weight: 300;
      line-height: 1.5;
      max-width: 700px;
      margin-left: auto;
      margin-right: auto;
    }

    .banner-content .btn {
      padding: 15px 35px;
      font-size: 1.1rem;
      text-transform: uppercase;
      letter-spacing: 2px;
      transition: all 0.4s ease;
      border-radius: 50px;
      font-weight: 600;
      position: relative;
      overflow: hidden;
      z-index: 1;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.3);
    }

    .banner-content .btn:before {
      content: \'\';
      position: absolute;
      top: 0;
      left: 0;
      width: 0;
      height: 100%;
      background: rgba(255, 255, 255, 0.2);
      transition: all 0.4s ease;
      z-index: -1;
    }

    .banner-content .btn:hover:before {
      width: 100%;
    }

    .banner-content .btn:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
    }

    @media (max-width: 768px) {
      .hero-banner {
        min-height: 500px;
      }

      .banner-content h1 {
        font-size: 2.8rem;
      }

      .banner-content p {
        font-size: 1.3rem;
      }
      
      .banner-content .btn {
        padding: 12px 25px;
        font-size: 1rem;
      }
    }

    /* Section Card Styles */
    .section-card {
      background: var(--bg-white);
      border-radius: 16px;
      padding: 40px;
      margin-bottom: 50px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.08);
      transition: all 0.4s ease;
      border: 1px solid rgba(0,0,0,0.03);
      position: relative;
      overflow: hidden;
    }
    
    .section-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 40px rgba(0,0,0,0.12);
    }
    
    .section-card:before {
      content: \'\';
      position: absolute;
      top: 0;
      right: 0;
      width: 150px;
      height: 150px;
      background: radial-gradient(circle, rgba(76, 175, 80, 0.1) 0%, rgba(76, 175, 80, 0) 70%);
      border-radius: 50%;
      pointer-events: none;
    }
    
    .section-card h2 {
      color: var(--primary-green);
      margin-bottom: 30px;
      position: relative;
      padding-bottom: 15px;
      font-weight: 700;
      font-size: 2rem;
    }
    
    .section-card h2 span {
      background: var(--accent-gold);
      width: 60px;
      height: 4px;
      position: absolute;
      bottom: 0;
      left: 0;
      border-radius: 2px;
    }
    
    /* Stats Grid */
    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 25px;
    }
    
    /* Policy Tabs Styles */
    .policy-tabs {
      margin-top: 40px;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 5px 25px rgba(0,0,0,0.08);
      background-color: white;
      transition: all 0.3s ease;
    }
    
    .policy-tabs:hover {
      box-shadow: 0 8px 30px rgba(0,0,0,0.12);
    }
    
    .tab-nav {
      display: flex;
      background: linear-gradient(to right, var(--bg-mint), var(--bg-cream));
      border-bottom: 1px solid rgba(0,0,0,0.05);
    }
    
    .policy-tab-btn {
      flex: 1;
      padding: 18px 15px;
      border: none;
      background: none;
      font-weight: 600;
      color: var(--text-medium);
      position: relative;
      cursor: pointer;
      transition: all 0.3s ease;
      text-align: center;
      overflow: hidden;
      border-radius: 0;
    }

    .policy-tab-btn:before {
      content: \'\';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 3px;
      background: linear-gradient(90deg, var(--accent-gold), var(--primary-green));
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .policy-tab-btn:after {
      content: \'\';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 0;
      height: 3px;
      background: var(--accent-gold);
      transition: all 0.3s ease;
    }

    .policy-tab-btn:hover {
      color: var(--primary-green);
      background-color: rgba(76, 175, 80, 0.03);
    }

    .policy-tab-btn:hover:before {
      opacity: 0.5;
    }

    .policy-tab-btn.active {
      color: var(--primary-green);
      background-color: rgba(76, 175, 80, 0.08);
      font-weight: 700;
      box-shadow: inset 0 -1px 0 var(--accent-gold);
    }

    .policy-tab-btn.active:after {
      width: 80%;
    }

    .policy-tab-btn.active:before {
      opacity: 1;
    }
    
    .tab-content-container {
      background-color: white;
      padding: 35px;
    }
    
    .policy-tab-content {
      display: none;
    }
    
    .policy-tab-content.active {
      display: block;
      animation: fadeIn 0.5s ease forwards;
    }
    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    /* Thrust Sectors Styles - Enhanced */
    .thrust-sectors-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
      gap: 20px;
      margin-bottom: 20px;
    }

    .thrust-sector-item {
      background: linear-gradient(145deg, #ffffff, #f8f9fa);
      border: 1px solid rgba(76, 175, 80, 0.2);
      padding: 22px;
      border-radius: 16px;
      text-align: center;
      cursor: pointer;
      transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
      box-shadow: 0 4px 12px rgba(0,0,0,0.03);
      position: relative;
      overflow: hidden;
    }

    .thrust-sector-item::before {
      content: \'\';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 4px;
      background: linear-gradient(90deg, var(--accent-gold), var(--primary-green));
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .thrust-sector-item:hover {
      transform: translateY(-7px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.08);
      border-color: rgba(76, 175, 80, 0.4);
      background: linear-gradient(145deg, #ffffff, #f0f7f1);
    }

    .thrust-sector-item:hover::before {
      opacity: 1;
    }

    .thrust-sector-item i {
      font-size: 36px;
      color: var(--primary-green);
      margin-bottom: 15px;
      transition: all 0.4s ease;
      background: rgba(76, 175, 80, 0.1);
      width: 70px;
      height: 70px;
      line-height: 70px;
      border-radius: 50%;
      display: inline-block;
    }

    .thrust-sector-item:hover i {
      transform: scale(1.1) rotate(5deg);
      color: var(--accent-gold);
      background: var(--primary-green);
      box-shadow: 0 5px 15px rgba(46, 125, 50, 0.2);
    }

    .thrust-sector-item p {
      margin: 10px 0 0;
      font-weight: 600;
      color: var(--text-medium);
      transition: all 0.3s ease;
      font-size: 0.95rem;
    }

    .thrust-sector-item:hover p {
      color: var(--primary-green);
    }
    
    /* Strategic Location Advantage Section Styles */
    .strategic-location-section {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.8s ease, transform 0.8s ease;
    }
    
    .strategic-location-section.visible {
      opacity: 1;
      transform: translateY(0);
    }
    
    .strategic-location-title h2:after {
      height: 4px;
      border-radius: 2px;
    }
    
    .strategic-location-title p {
      font-style: italic;
      font-weight: 300;
      color: #666;
    }
    
    .sikkim-map {
      border-radius: 12px !important;
      box-shadow: 0 4px 12px rgba(0,0,0,0.08) !important;
      overflow: hidden;
      position: relative;
    }
    
    .map-attribution {
      position: absolute;
      bottom: 10px;
      right: 10px;
      background: rgba(255, 255, 255, 0.8);
      padding: 4px 8px;
      border-radius: 4px;
      font-size: 11px;
      color: #207A3E;
      z-index: 10;
      box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }
    
    .connectivity-item {
      display: flex;
      align-items: flex-start;
      background: #F8FDF8;
      padding: 16px;
      border-radius: 16px;
      margin-bottom: 12px;
      transition: all 0.3s ease;
    }
    
    .connectivity-item:last-child {
      margin-bottom: 0;
    }
    
    .connectivity-item:hover {
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    }
    
    .highlight-number {
      width: 28px;
      height: 28px;
      background-color: #EAF5EA;
      color: #207A3E;
      font-weight: 600;
      font-size: 13px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 15px;
      flex-shrink: 0;
    }
    
    .district-chip {
      background: #ffffff;
      padding: 12px 15px;
      border-radius: 8px;
      border: 1px solid #E1EAE1;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    
    .district-chip h4 {
      margin: 0 0 5px 0;
      color: #207A3E;
      font-weight: 500;
      font-size: 15px;
    }
    
    .district-chip p {
      margin: 0;
      font-size: 12px;
      color: #666;
    }
    
    .district-chip:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.06);
    }
    
    .district-chip.active {
      box-shadow: 0 0 4px #C8EFD0;
      border-color: #A5D6A7;
    }
    
    /* Add styles for the links footer */
    .links-footer {
      background: var(--bg-mint);
      padding: 70px 0;
      margin-top: 60px;
      position: relative;
      border-top: 1px solid rgba(76, 175, 80, 0.2);
    }

    .links-footer:before {
      content: \'\';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url("data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%2346a049\' fill-opacity=\'0.05\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }

    .links-footer h3 {
      color: var(--primary-green);
      font-size: 1.6rem;
      margin-bottom: 25px;
      font-weight: 700;
      position: relative;
      padding-bottom: 15px;
    }
    
    .links-footer h3:after {
      content: \'\';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 50px;
      height: 3px;
      background: var(--accent-gold);
    }

    .links-footer ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .links-footer ul li {
      margin-bottom: 12px;
    }

    .links-footer ul li a {
      color: var(--text-medium);
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .links-footer ul li a:hover {
      color: var(--primary-green);
      padding-left: 5px;
    }

    .links-footer .contact-info {
      color: var(--text-medium);
      line-height: 1.8;
    }

    .links-footer .contact-info strong {
      color: var(--text-dark);
      display: inline-block;
      min-width: 80px;
    }

    .links-footer .about-text {
      color: var(--text-medium);
      line-height: 1.8;
    }

    @media (max-width: 900px) {
      .carousel-split-layout { flex-direction: column !important; min-height:unset !important; }
      .carousel-text-col { padding: 32px 0 0 0 !important; }
      .carousel-img-col { min-width:unset !important; max-width:100% !important; justify-content:center; }
      #largeScaleCarouselImg { height: 220px !important; max-width: 100% !important; }
      #carouselPrev { left: 10px !important; }
      #carouselNext { right: 10px !important; }
    }

    /* Large Scale Projects Carousel Responsive */
    @media (max-width: 900px) {
      .carousel-split-layout { flex-direction: column !important; min-height:unset !important; }
      .carousel-text-col { padding: 32px 0 0 0 !important; }
      .carousel-img-col { min-width:unset !important; max-width:100% !important; justify-content:center; }
      #largeScaleCarouselImg { height: 220px !important; max-width: 100% !important; }
      #carouselPrev { left: 10px !important; }
      #carouselNext { right: 10px !important; }
    }

    @media (max-width: 600px) {
      .grid {
        grid-template-columns: 1fr !important;
        gap: 16px !important;
      }
      .carousel-split-layout {
        flex-direction: column !important;
        height: auto !important;
      }
      .carousel-text-col, .carousel-img-col {
        padding: 16px 8px !important;
      }
      .section-card, .controls, .modal-content {
        padding: 16px !important;
      }
      .section-card h2, .section-title h2, h2.no-underline {
        font-size: 1.2rem !important;
        padding-bottom: 8px !important;
        margin-bottom: 12px !important;
      }
      .banner-content h1 {
        font-size: 2rem !important;
      }
      .banner-content p {
        font-size: 1rem !important;
      }
      .banner-content .btn, .btn, button, .controls input, .controls select {
        font-size: 0.95rem !important;
        padding: 10px 16px !important;
      }
      .modal-content {
        max-width: 98vw !important;
        width: 98vw !important;
        min-width: unset !important;
      }
      .modal-content h2 {
        font-size: 1.1rem !important;
      }
      .controls {
        flex-direction: column !important;
        gap: 8px !important;
      }
      .controls input, .controls select {
        width: 100% !important;
        min-width: unset !important;
      }
      .section-card, .pre-footer, .links-footer {
        margin-bottom: 20px !important;
        margin-top: 20px !important;
      }
      .footer-top, .links-footer, .pre-footer {
        padding: 24px 0 !important;
      }
      .footer-links h4, .links-footer h3 {
        font-size: 1rem !important;
        margin-bottom: 10px !important;
      }
      .footer-links ul, .links-footer ul {
        font-size: 0.95rem !important;
      }
      .sikkim-map {
        height: 180px !important;
      }
      .district-chip h4 {
        font-size: 13px !important;
      }
      .district-chip p {
        font-size: 10px !important;
      }
      .connectivity-item strong {
        font-size: 12px !important;
      }
      .connectivity-item span {
        font-size: 11px !important;
      }
      .project-cards-section h2 {
        font-size: 1.1rem !important;
      }
      /* Hide desktop navigation arrows on mobile */
      .desktop-nav-arrow {
        display: none !important;
      }
      
      /* Show mobile pagination on mobile */
      .mobile-pagination {
        display: flex !important;
      }
      
      .mobile-nav-btn:hover {
        background: var(--dark-green) !important;
        transform: translateY(-2px) !important;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15) !important;
      }
      
      .mobile-nav-btn:disabled {
        background: #ccc !important;
        cursor: not-allowed !important;
        transform: none !important;
      }
      
      #carouselPrev, #carouselNext {
        width: 36px !important;
        height: 36px !important;
        font-size: 1.2rem !important;
        left: 2px !important;
        right: 2px !important;
        top: 90% !important;
        transform: translateY(-50%) !important;
      }
      .row, .row2 {
        flex-direction: column !important;
        gap: 12px !important;
      }
      .imagegroup2 {
        flex-wrap: wrap !important;
        justify-content: center !important;
      }
      .imagegroup2 img {
        max-width: 80px !important;
        margin: 4px !important;
      }
      .footer-bottom {
        font-size: 0.9rem !important;
        padding: 10px 0 !important;
      }
      .section-title p {
        font-size: 0.95rem !important;
      }
      .stat-value {
        font-size: 1.2rem !important;
      }
      .stat-label {
        font-size: 0.95rem !important;
      }
      .feature-list li {
        font-size: 0.95rem !important;
        padding-left: 20px !important;
      }
      .thrust-sector-item p {
        font-size: 0.85rem !important;
      }
      .thrust-sector-item i, .thrust-sector-item span {
        font-size: 24px !important;
        width: 40px !important;
        height: 40px !important;
        line-height: 40px !important;
      }
      .thrust-sectors-grid {
        grid-template-columns: 1fr 1fr !important;
        gap: 8px !important;
      }
      .tab-nav {
        flex-direction: column !important;
      }
      .policy-tab-btn {
        padding: 10px 8px !important;
        font-size: 0.95rem !important;
      }
      .tab-content-container {
        padding: 10px !important;
      }
      .pdf-content-integration a {
        padding: 10px 12px !important;
        font-size: 0.95rem !important;
      }
      #prevProjects, #carouselPrev {
        left: 8px !important;
        right: auto !important;
        top: 50% !important;
        transform: translateY(-50%) !important;
      }
      #nextProjects, #carouselNext {
        right: 8px !important;
        left: auto !important;
        top: 50% !important;
        transform: translateY(-50%) !important;
      }
      .pre-footer .btn-outline-light {
        display: block !important;
        width: 100% !important;
        margin: 20px auto 0 auto !important;
        text-align: center !important;
      }
    }
    @media (max-width: 400px) {
      .banner-content h1 {
        font-size: 1.2rem !important;
      }
      .section-title h2, h2.no-underline {
        font-size: 1rem !important;
      }
      .section-card, .controls, .modal-content {
        padding: 8px !important;
      }
      .footer-links h4, .links-footer h3 {
        font-size: 0.9rem !important;
      }
      .footer-bottom {
        font-size: 0.8rem !important;
      }
    }
    body {
      overflow-x: hidden !important;
    }

    /* Department-specific styles */
    .department-container {
      background: #ffffff;
      border-radius: 12px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      transition: all 0.3s ease;
      border: 1px solid rgba(0,0,0,0.03);
      position: relative;
      overflow: hidden;
    }

    .department-container:hover {
      box-shadow: 0 8px 25px rgba(0,0,0,0.08);
    }

    .department-container h3 {
      color: var(--primary-green);
      margin-bottom: 15px;
      font-weight: 700;
      position: relative;
      padding-bottom: 10px;
    }

    .department-container h3:after {
      content: \'\';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 60px;
      height: 4px;
      background: var(--accent-gold);
      border-radius: 2px;
    }

    .department-container ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .department-container ul li {
      margin-bottom: 10px;
    }

    .department-container ul li a {
      color: var(--text-medium);
      transition: all 0.3s ease;
    }

    .department-container ul li a:hover {
      color: var(--primary-green);
      padding-left: 5px;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
  <!-- Top Bar -->
  <section id="topbar" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="#" class="logo"><img src="https://industries.sikkim.gov.in/assets/img/logo.png" alt="" class="img-fluid"></a>
      <a href="#" class="logo"><img src="logoline.png" alt="" class="img-fluid"></a>
      <a href="#" class="logo"><img src="https://industries.sikkim.gov.in/assets/img/logo-golden.png" alt="" class="img-fluid"></a>
    </div>
  </section>

  <!-- Original Header with New Navigation -->
  <header id="header">
    <div class="d-flex">
      <nav id="navbar" class="navbar">
        <ul id="mainNavMenu">
          <li><a href="https://industries.sikkim.gov.in/visitors">HOME</a></li>
          <li class="dropdown">
            <a href="#"><span>ABOUT US</span></a>
            <ul>
              <li><a href="https://industries.sikkim.gov.in/visitors/orgview">Organizational Setup</a></li>
              <li><a href="https://industries.sikkim.gov.in/visitors/dics">District Industries Center</a></li>
              <li><a href="https://industries.sikkim.gov.in/visitors/officesofdept">Offices under Department</a></li>
              <li><a href="https://industries.sikkim.gov.in/visitors/officerdirectories">Officer Directory</a></li>
              <li><a href="https://industries.sikkim.gov.in/visitors/industriesandcompanies">Industries and Companies</a></li>
              <li><a href="https://industries.sikkim.gov.in/visitors/psus">Public Sector Undertaking</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#"><span>SCHEMES AND GUIDELINES</span></a>
            <ul>
              <li><a href="https://industries.sikkim.gov.in/visitors/odop">ODOP</a></li>
              <li><a href="https://industries.sikkim.gov.in/visitors/schemes?8">SC-ST Hub Scheme Guidelines</a></li>
              <li><a href="https://industries.sikkim.gov.in/visitors/schemes?9">MSE-CDP Guidelines</a></li>
              <li><a href="https://industries.sikkim.gov.in/visitors/schemes?17">APPLICATION/RENEWAL OF INDUSTRIAL LICENCE</a></li>
              <li><a href="https://industries.sikkim.gov.in/visitors/schemes">View More</a></li>
            </ul>
          </li>
          <li><a href="https://industries.sikkim.gov.in/visitors#contact">GRIEVANCES</a></li>
          <li><a href="https://industries.sikkim.gov.in/visitors/rtis">RTI</a></li>
          <li><a href="https://industries.sikkim.gov.in/visitors/events">EVENTS</a></li>
          <li><a href="https://industries.sikkim.gov.in/visitors/awards">AWARDS & ACHIEVEMENTS</a></li>
          <li><a href="https://industries.sikkim.gov.in/visitors/gallery">GALLERY</a></li>
          <li><a href="https://industries.sikkim.gov.in/visitors/gallery">INVEST IN SIKKIM</a></li>
          <li class="dropdown">
            <a href="#"><span>IMPORTANT LINKS</span></a>
            <ul>
              <li><a href="https://sikkimdesignweek.com/">Sikkim Design Week</a></li>
              <li><a href="https://www.facebook.com/share/18ikrxFjYz/">Sikkim Design Week 2025</a></li>
              <li><a href="https://www.nsws.gov.in/">National Single Window System</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle" tabindex="0" role="button"></i>
      </nav>
    </div>
  </header>

  <main>
    <!-- Hero Banner Section -->
    <section class="hero-banner" id="home">
      <div class="overlay"></div>
      <div class="container">
        <div class="banner-content">
          <h1>Invest in Sikkim </h1>
          <p>Unlock ₹30,000 Cr opportunities across green and future-ready sectors</p>
          <a href="#main-content" class="btn" style="background-color: var(--primary-green); color: white; transition: all 0.3s ease; font-weight: 500; padding: 12px 28px; border-radius: 4px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); border: none; letter-spacing: 0.5px; text-transform: uppercase; font-size: 14px;" onmouseover="this.style.backgroundColor=\'var(--dark-green)\'; this.style.boxShadow=\'0 4px 15px rgba(0,0,0,0.2)\';" onmouseout="this.style.backgroundColor=\'var(--primary-green)\'; this.style.boxShadow=\'0 2px 10px rgba(0,0,0,0.1)\';">Get Started</a>
        </div>
      </div>
    </section>

    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Invest In Sikkim</h2>
          <ol>
            <li><a href="">Home</a></li>
            <li>Invest In Sikkim</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <section id="main-content" class="inner-page">
      <div class="container">
        <!-- Sikkim At A Glance -->
        <div class="section-card" id="about">
          <h2>
            <span></span>
            Sikkim At A Glance
          </h2>
          
          <div class="stats-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
            <div class="stat-item" style="background: white; padding: 25px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-left: 4px solid var(--primary-green); transition: all 0.3s ease;">
              <div class="stat-value" style="font-size: 2.2rem; color: var(--primary-green); font-weight: 700; margin-bottom: 10px;">7,096 km²</div>
              <div class="stat-label" style="color: var(--text-medium); font-weight: 500;">Geographical Area</div>
            </div>
            
            <div class="stat-item" style="background: white; padding: 25px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-left: 4px solid var(--primary-green); transition: all 0.3s ease;">
              <div class="stat-value" style="font-size: 2.2rem; color: var(--primary-green); font-weight: 700; margin-bottom: 10px;">97%</div>
              <div class="stat-label" style="color: var(--text-medium); font-weight: 500;">Literacy Rate</div>
            </div>
            
            <div class="stat-item" style="background: white; padding: 25px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-left: 4px solid var(--primary-green); transition: all 0.3s ease;">
              <div class="stat-value" style="font-size: 2.2rem; color: var(--primary-green); font-weight: 700; margin-bottom: 10px;">8000 MW</div>
              <div class="stat-label" style="color: var(--text-medium); font-weight: 500;">Hydropower Potential</div>
            </div>
            
            <div class="stat-item" style="background: white; padding: 25px; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); border-left: 4px solid var(--primary-green); transition: all 0.3s ease;">
              <div class="stat-value" style="font-size: 2.2rem; color: var(--primary-green); font-weight: 700; margin-bottom: 10px;">100%</div>
              <div class="stat-label" style="color: var(--text-medium); font-weight: 500;">Organic State</div>
            </div>
          </div>
        </div>

        <!-- Why Invest in Sikkim Section with new styling -->
        <div class="section-card" id="policies-incentives">
          <div class="section-title">
            <h2>Why Invest in Sikkim?</h2>
            <p>Discover the unique advantages of India\'s first 100% organic state</p>
          </div>
          
          <div class="row">
            <div class="col-md-12">
              <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 25px;">Sikkim, India\'s first 100% organic state and one of its most peaceful regions, offers unique investment opportunities with its strategic location, eco-friendly policies, and special economic incentives. Known for its sustainable agriculture, Sikkim is a global leader in organic spices like large cardamom and turmeric, while its hydropower and solar projects attract green energy investors.</p>
              
              <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 30px;">The state\'s thriving tourism sector, highlighted by UNESCO-listed Khangchendzonga National Park and eco-tourism initiatives, benefits from improved infrastructure like the upcoming Sevoke-Rangpo railway. With low crime rates, investor-friendly policies, and a focus on renewable energy and organic food processing, Sikkim is an ideal destination for businesses seeking growth in harmony with nature. Its stable governance and green economy make it a model for sustainable development in India.</p>
              
              <div class="row mt-5">
                <div class="col-md-6">
                  <div style="background-color: white; padding: 30px; border-radius: 12px; height: 100%; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; border-left: 4px solid var(--primary-green);">
                    <h4 style="color: var(--primary-green); margin-bottom: 20px; font-weight: 600; position: relative; padding-bottom: 15px;">Key Advantages</h4>
                    <ul class="feature-list">
                      <li>Pleasant weather conditions from tropical to alpine climate</li> 
                      <li>High literacy rate of 97% which is more than the national average</li>
                      <li>Lowest crime rate in the country</li> 
                      <li>World\'s first certified organic farming state</li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-6">
                  <div style="background-color: white; padding: 30px; border-radius: 12px; height: 100%; box-shadow: 0 5px 15px rgba(0,0,0,0.05); transition: all 0.3s ease; border-left: 4px solid var(--primary-green);">
                    <h4 style="color: var(--primary-green); margin-bottom: 20px; font-weight: 600; position: relative; padding-bottom: 15px;">Business Environment</h4>
                    <ul class="feature-list">
                      <li>Skilled and educated workforce</li>
                      <li>Political stability and peaceful environment</li>
                      <li>Growing infrastructure development</li>
                      <li>Gateway to ASEAN markets</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Policies & Incentives Section with new styling -->
        <div class="section-card">
          <h2><span></span>Policies & Incentives</h2>
          
          <div class="policy-tabs">
            <!-- Tab Navigation -->
            <div class="tab-nav">
              <button class="policy-tab-btn active" data-policy-tab="industrial-policy">Industrial Policy</button>
              <button class="policy-tab-btn" data-policy-tab="incentives">Incentives & Subsidies</button>
              <button class="policy-tab-btn" data-policy-tab="schemes">Special Schemes</button>
            </div>
              
              <!-- Tab Content -->
              <div class="tab-content-container" style="background-color: white; padding: 30px;">
                <!-- Industrial Policy Tab -->
                <div class="policy-tab-content active" data-policy-tab="industrial-policy">
                  <h4 style="color: var(--primary-green); margin-bottom: 20px;">Sikkim Industrial & Investment Policy 2024</h4>
                  
                  <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; margin-bottom: 20px;">
                    <div style="background-color: rgba(76, 175, 80, 0.1); padding: 20px; border-radius: 8px;">
                      <h5 style="color: var(--primary-green); margin-top: 0;">Vision</h5>
                      <p style="margin-bottom: 0;">To transform Sikkim into a sustainable industrial hub that leverages its natural resources and strategic location while preserving its unique ecological and cultural heritage.</p>
                    </div>
                    
                    <div style="background-color: rgba(76, 175, 80, 0.1); padding: 20px; border-radius: 8px;">
                      <h5 style="color: var(--primary-green); margin-top: 0;">Mission</h5>
                      <p style="margin-bottom: 0;">To attract ₹30,000 Cr investment, create 20,000 jobs, and build a ₹1.5 lakh Cr economy by 2047 through green and future-ready sectors.</p>
                    </div>
                  </div>
                  
                  <h5 style="color: var(--primary-green); margin: 25px 0 15px;">16 Thrust Sectors</h5>
                  
                  <div class="thrust-sectors-container" style="position: relative; margin: 20px 0 40px;">
                    <!-- Initial 6 Sectors (Always Visible) -->
                    <div class="thrust-sectors-grid" style="display: grid; grid-template-columns: repeat(6, 1fr); gap: 15px; margin-bottom: 15px;">
                      <!-- Thrust Sector 1 -->
                      <div class="thrust-sector-item" data-thrust-sector="tourism">
                        <span style="font-size: 36px; display: inline-block; width: 70px; height: 70px; line-height: 70px; border-radius: 50%; background: rgba(76, 175, 80, 0.1); color: var(--primary-green);">🌿</span>
                        <p>Green Tourism</p>
                      </div>
                      
                      <!-- Thrust Sector 2 -->
                      <div class="thrust-sector-item" data-thrust-sector="pharma">
                        <span style="font-size: 36px; display: inline-block; width: 70px; height: 70px; line-height: 70px; border-radius: 50%; background: rgba(76, 175, 80, 0.1); color: var(--primary-green);">💊</span>
                        <p>Pharmaceuticals & Bio technology</p>
                      </div>
                      
                      <!-- Thrust Sector 3 -->
                      <div class="thrust-sector-item" data-thrust-sector="renewable">
                        <span style="font-size: 36px; display: inline-block; width: 70px; height: 70px; line-height: 70px; border-radius: 50%; background: rgba(76, 175, 80, 0.1); color: var(--primary-green);">💧</span>
                        <p>Clean and Green Energy</p>
                      </div>
                      
                      <!-- Thrust Sector 4 -->
                      <div class="thrust-sector-item" data-thrust-sector="traditional">
                        <span style="font-size: 36px; display: inline-block; width: 70px; height: 70px; line-height: 70px; border-radius: 50%; background: rgba(76, 175, 80, 0.1); color: var(--primary-green);">🌱</span>
                        <p>Traditional Medicine Systems</p>
                      </div>
                      
                      <!-- Thrust Sector 5 -->
                      <div class="thrust-sector-item" data-thrust-sector="avgc">
                        <span style="font-size: 36px; display: inline-block; width: 70px; height: 70px; line-height: 70px; border-radius: 50%; background: rgba(76, 175, 80, 0.1); color: var(--primary-green);">🎮</span>
                        <p>AVGC-XR</p>
                      </div>
                      
                      <!-- Thrust Sector 6 -->
                      <div class="thrust-sector-item" data-thrust-sector="food">
                        <span style="font-size: 36px; display: inline-block; width: 70px; height: 70px; line-height: 70px; border-radius: 50%; background: rgba(76, 175, 80, 0.1); color: var(--primary-green);">🍃</span>
                        <p>Organic Farming and Processing</p>
                      </div>
                    </div>
                    
                    <!-- View More Button - Enhanced -->
                    <div class="text-center" style="margin-bottom: 20px;">
                      <button id="viewMoreSectorsBtn" style="background: linear-gradient(135deg, #3a8a3f 0%, #2c6e30 100%); border: none; color: white; padding: 10px 24px; border-radius: 30px; font-weight: 600; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(46, 125, 50, 0.2); position: relative; overflow: hidden;">
                        <span style="position: relative; z-index: 2;">➕ View All 16 Sectors</span>
                        <span style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, var(--accent-gold) 0%, #ffb300 100%); opacity: 0; transition: opacity 0.3s ease; z-index: 1;"></span>
                      </button>
                    </div>
                    
                    <style>
                      #viewMoreSectorsBtn:hover {
                        transform: translateY(-2px);
                        box-shadow: 0 6px 15px rgba(46, 125, 50, 0.25);
                      }
                      #viewMoreSectorsBtn:hover span:last-child {
                        opacity: 0.15;
                      }
                    </style>
                    
                    <!-- Additional 10 Sectors (Initially Hidden)(arogya) -->
                    <div id="additionalSectors" class="thrust-sectors-grid" style="display: none; grid-template-columns: repeat(6, 1fr); gap: 15px; margin-bottom: 15px;">
                      <!-- Thrust Sector 7 -->
                      <div class="thrust-sector-item" data-thrust-sector="it">
                        <span style="font-size: 36px; display: inline-block; width: 70px; height: 70px; line-height: 70px; border-radius: 50%; background: rgba(76, 175, 80, 0.1); color: var(--primary-green);">💻</span>
                        <p>IT & ITeS</p>
                      </div>
                      
                      <!-- Thrust Sector 8 -->
                      <div class="thrust-sector-item" data-thrust-sector="climate">
                        <span style="font-size: 36px; display: inline-block; width: 70px; height: 70px; line-height: 70px; border-radius: 50%; background: rgba(76, 175, 80, 0.1); color: var(--primary-green);">🌍</span>
                        <p>Climate Change Mitigation, Management and Studies</p>
                      </div>
                      
                      <!-- Thrust Sector 9 -->
                      <div class="thrust-sector-item" data-thrust-sector="biotech">
                        <span style="font-size: 36px; display: inline-block; width: 70px; height: 70px; line-height: 70px; border-radius: 50%; background: rgba(76, 175, 80, 0.1); color: var(--primary-green);">⚛️</span>
                        <p>Green Hydrogen</p>
                      </div>
                      
                      <!-- Thrust Sector 10 -->
                      <div class="thrust-sector-item" data-thrust-sector="traderoutes">
                        <span style="font-size: 36px; display: inline-block; width: 70px; height: 70px; line-height: 70px; border-radius: 50%; background: rgba(76, 175, 80, 0.1); color: var(--primary-green);">🛣️</span>
                        <p>Trade routes and Pilgrimage</p>
                      </div>
                      
                      <!-- Thrust Sector 11 -->
                      <div class="thrust-sector-item" data-thrust-sector="education">
                        <span style="font-size: 36px; display: inline-block; width: 70px; height: 70px; line-height: 70px; border-radius: 50%; background: rgba(76, 175, 80, 0.1); color: var(--primary-green);">🎓</span>
                        <p>Education</p>
                      </div>
                      
                      <!-- Thrust Sector 12 -->
                      <div class="thrust-sector-item" data-thrust-sector="recreation">
                        <span style="font-size: 36px; display: inline-block; width: 70px; height: 70px; line-height: 70px; border-radius: 50%; background: rgba(76, 175, 80, 0.1); color: var(--primary-green);">🎭</span>
                        <p>Recreation and Entertainment: Sports, Music, and Leisure</p>
                      </div>
                      
                      <!-- Thrust Sector 13 -->
                      <div class="thrust-sector-item" data-thrust-sector="film">
                        <span style="font-size: 36px; display: inline-block; width: 70px; height: 70px; line-height: 70px; border-radius: 50%; background: rgba(76, 175, 80, 0.1); color: var(--primary-green);">🎬</span>
                        <p>Films and Media</p>
                      </div>
                      
                      <!-- Thrust Sector 14 -->
                      <div class="thrust-sector-item" data-thrust-sector="textiles">
                        <span style="font-size: 36px; display: inline-block; width: 70px; height: 70px; line-height: 70px; border-radius: 50%; background: rgba(76, 175, 80, 0.1); color: var(--primary-green);">👕</span>
                        <p>Textiles and Fashion Design</p>
                      </div>
                      
                      <!-- Thrust Sector 15 -->
                      <div class="thrust-sector-item" data-thrust-sector="wellness">
                        <span style="font-size: 36px; display: inline-block; width: 70px; height: 70px; line-height: 70px; border-radius: 50%; background: rgba(76, 175, 80, 0.1); color: var(--primary-green);">❤️</span>
                        <p>Health and Wellness</p>
                      </div>
                      
                      <!-- Thrust Sector 16 -->
                      <div class="thrust-sector-item" data-thrust-sector="smartcities">
                        <span style="font-size: 36px; display: inline-block; width: 70px; height: 70px; line-height: 70px; border-radius: 50%; background: rgba(76, 175, 80, 0.1); color: var(--primary-green);">🏙️</span>
                        <p>Smart Cities and Real Estate</p>
                      </div>
                    </div>
                    
                    <!-- Thrust Sector Details Panel -->
                    <div id="thrustSectorDetails" style="background: rgba(76, 175, 80, 0.05); border-radius: 12px; padding: 25px; margin-top: 30px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); display: none; border-left: 4px solid var(--primary-green);"></div>
                  </div>
                  
                  <div class="text-center mt-4">
                    <a href="policy.pdf" target="_blank" class="btn" style="background-color: var(--primary-green); color: white; padding: 12px 24px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; justify-content: center; font-weight: 600; font-family: \'Poppins\', sans-serif; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(46, 125, 50, 0.2);" onmouseover="this.style.backgroundColor=\'var(--dark-green)\'; this.style.transform=\'translateY(-2px)\'; this.style.boxShadow=\'0 6px 16px rgba(46, 125, 50, 0.3)\';" onmouseout="this.style.backgroundColor=\'var(--primary-green)\'; this.style.transform=\'translateY(0)\'; this.style.boxShadow=\'0 4px 12px rgba(46, 125, 50, 0.2)\';">
                      <i class="fas fa-download" style="margin-right: 10px; font-size: 16px;"></i> Download Complete Policy
                    </a>
                  </div>
                </div>
                

                
                <!-- Incentives Tab -->
                <div class="policy-tab-content" data-policy-tab="incentives" style="display: none;">
                  <h4 style="color: var(--primary-green); margin-bottom: 20px;">Key Incentives & Subsidies</h4>
                  
                  <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; margin-bottom: 20px;">
                    <div style="background-color: white; border: 1px solid #e0e0e0; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                      <h5 style="color: var(--primary-green); margin-top: 0; border-bottom: 2px solid var(--lighter-green); padding-bottom: 10px;">SGST Reimbursement</h5>
                      <ul style="padding-left: 20px; margin-bottom: 10px;">
                        <li><strong>75% SGST reimbursement for 10 years</strong> on finished products</li>
                        <li>Based on production commencement & GST Council recommendation</li>
                        <li><strong>Micro Enterprises:</strong> Up to 250% of Fixed Capital Investment (FCI)</li>
                        <li><strong>Small Enterprises:</strong> Up to 200% of FCI</li>
                        <li><strong>Medium & Large Enterprises:</strong> Up to 150% of FCI</li>
                      </ul>
                      <div style="background-color: #f8f9fa; padding: 12px; border-radius: 6px; border-left: 4px solid var(--accent-gold); margin-top: 15px;">
                        <p style="margin: 0; font-size: 14px; font-weight: 500;"><strong>Condition:</strong> Must maintain ≥75% average production for 5 years after benefit period</p>
                        <p style="margin: 8px 0 0 0; font-size: 13px; color: #666;"><em>Non-compliance leads to repayment of full benefit, unless valid reason accepted by authorities</em></p>
                      </div>
                    </div>
                    
                    <div style="background-color: white; border: 1px solid #e0e0e0; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                      <h5 style="color: var(--primary-green); margin-top: 0; border-bottom: 2px solid var(--lighter-green); padding-bottom: 10px;">Stamp Duty Waiver</h5>
                      <ul style="padding-left: 20px; margin-bottom: 10px;">
                        <li><strong>Micro & Small Enterprises:</strong> 100% waiver</li>
                        <li><strong>Medium Enterprises:</strong> 75% waiver</li>
                        <li><strong>Large Industries:</strong> 50% waiver (up to ₹25 lakh cap)</li>
                        <li><strong>Women-led Units:</strong> 100% waiver up to ₹50 lakh</li>
                      </ul>
                      <div style="background-color: #f8f9fa; padding: 12px; border-radius: 6px; border-left: 4px solid var(--accent-gold); margin-top: 15px;">
                        <p style="margin: 0; font-size: 14px; font-weight: 500;"><strong>Condition:</strong> Only on land exclusively used for industrial setup</p>
                      </div>
                    </div>
                    
                    <div style="background-color: white; border: 1px solid #e0e0e0; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                      <h5 style="color: var(--primary-green); margin-top: 0; border-bottom: 2px solid var(--lighter-green); padding-bottom: 10px;">Patent Registration Incentives</h5>
                      <ul style="padding-left: 20px; margin-bottom: 10px;">
                        <li><strong>Domestic Patents:</strong> Up to ₹2 lakh reimbursement</li>
                        <li><strong>International Patents:</strong> Up to ₹10 lakh reimbursement</li>
                        <li><strong>75%</strong> reimbursed after filing, <strong>25%</strong> after grant</li>
                        <li><strong>Optional:</strong> 100% reimbursement after grant (one-time claim)</li>
                        <li><strong>Eligible Costs:</strong> Filing, attorney, search & maintenance fees</li>
                        <li><strong>Limit:</strong> Max 5 reimbursements per company (domestic + international)</li>
                        <li><strong>Bonus:</strong> Additional to Govt. of India schemes</li>
                      </ul>
                      <div style="background-color: #f8f9fa; padding: 12px; border-radius: 6px; border-left: 4px solid var(--accent-gold); margin-top: 15px;">
                        <p style="margin: 0; font-size: 14px; font-weight: 500;">
                          <strong>Condition:</strong> Patent must be filed or granted within policy period
                        </p>
                      </div>
                    </div>
                  
                  <div class="text-center mt-4">
                    <a href="policy.pdf" target="_blank" class="btn" style="background-color: var(--primary-green); color: white; padding: 12px 24px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; justify-content: center; font-weight: 600; font-family: \'Poppins\', sans-serif; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(46, 125, 50, 0.2);" onmouseover="this.style.backgroundColor=\'var(--dark-green)\'; this.style.transform=\'translateY(-2px)\'; this.style.boxShadow=\'0 6px 16px rgba(46, 125, 50, 0.3)\';" onmouseout="this.style.backgroundColor=\'var(--primary-green)\'; this.style.transform=\'translateY(0)\'; this.style.boxShadow=\'0 4px 12px rgba(46, 125, 50, 0.2)\';">
                      <i class="fas fa-download" style="margin-right: 10px; font-size: 16px;"></i> Download Complete Policy
                    </a>
                  </div>
                </div>
                  

                  

                </div>
                
                <!-- Special Schemes Tab -->
                <div class="policy-tab-content" data-policy-tab="schemes" style="display: none;">
                  <h4 style="color: var(--primary-green); margin-bottom: 20px;">Special Schemes</h4>
                  
                  <div style="background-color: white; border: 1px solid #e0e0e0; padding: 25px; border-radius: 8px; margin-bottom: 20px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                      <div style="background-color: var(--primary-green); color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                        <i class="fas fa-rocket" style="font-size: 20px;"></i>
                      </div>
                      <h5 style="color: var(--primary-green); margin: 0; font-weight: 600;"><a href="https://unnati.dpiit.gov.in/" style="color: var(--primary-green); text-decoration: underline; text-underline-offset: 3px; text-decoration-thickness: 1px;">UNNATI Scheme</a></h5>
                    </div>
                    
                    <p>The UNNATI (Unlocking National Growth Through Actionable Transformative Initiatives) scheme provides comprehensive support for industries in Sikkim with different benefits based on zones.</p>
                    
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-top: 20px;">
                      <div>
                        <h6 style="color: var(--text-dark); margin-top: 0; font-weight: 600;">Zone A Benefits</h6>
                        <ul style="padding-left: 20px; margin-bottom: 0;">
                          <li>30% Subsidy (up to ₹5 Cr Capital)</li>
                          <li>3% Interest Subsidy</li>
                          <li>75% Net GST Reimbursement</li>
                        </ul>
                      </div>
                      
                      <div>
                        <h6 style="color: var(--text-dark); margin-top: 0; font-weight: 600;">Zone B Benefits</h6>
                        <ul style="padding-left: 20px; margin-bottom: 0;">
                          <li>50% Subsidy (up to ₹7.5 Cr Capital)</li>
                          <li>5% Interest Subsidy</li>
                          <li>100% Net GST Reimbursement</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  
                  <div style="background-color: white; border: 1px solid #e0e0e0; padding: 25px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.05);">
                    <div style="display: flex; align-items: center; margin-bottom: 15px;">
                      <div style="background-color: var(--primary-green); color: white; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 15px;">
                        <i class="fas fa-landmark" style="font-size: 20px;"></i>
                      </div>
                      <h5 style="color: var(--primary-green); margin: 0; font-weight: 600;">Land Leasing Policy</h5>
                    </div>
                    <p>The State Government has provisions to lease land to investors for industrial growth while protecting local land laws.</p>
                    <ul style="padding-left: 20px; margin-bottom: 0; margin-top: 10px; color: var(--text-medium); font-size: 0.98rem;">
                      <li>Land banks maintained by Commerce & Industries Dept for industrial use</li>
                      <li>Private land can be leased for up to 33 years (renewable) on mutually agreed terms</li>
                      <li>Lease payment as per market rate or as agreed</li>
                      <li>Large investments (over ₹50 Cr) may be eligible for a second renewal</li>
                      <li>Policy ensures industrial growth without diluting protected land laws</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <script>
          // Add tab functionality for policy tabs
          document.addEventListener(\'DOMContentLoaded\', function() {
            const policyTabBtns = document.querySelectorAll(\'.policy-tab-btn\');
            const policyTabContents = document.querySelectorAll(\'.policy-tab-content\');
            
            policyTabBtns.forEach(btn => {
              btn.addEventListener(\'click\', function() {
                // Remove active class from all buttons and contents
                policyTabBtns.forEach(b => {
                  b.classList.remove(\'active\');
                  b.style.color = \'var(--text-medium)\';
                });
                policyTabContents.forEach(content => {
                  content.style.display = \'none\';
                });
                
                // Add active class to clicked button
                this.classList.add(\'active\');
                this.style.color = \'var(--primary-green)\';
                
                // Show corresponding content
                const tabId = this.getAttribute(\'data-policy-tab\');
                document.querySelector(`.policy-tab-content[data-policy-tab="${tabId}"]`).style.display = \'block\';
              });
            });
            
            // View More Sectors Button functionality
            const viewMoreBtn = document.getElementById(\'viewMoreSectorsBtn\');
            const additionalSectors = document.getElementById(\'additionalSectors\');
            let showLessBtn = null;
            
            viewMoreBtn.addEventListener(\'click\', function() {
              if (additionalSectors.style.display === \'none\') {
                // Show additional sectors
                additionalSectors.style.display = \'grid\';
                viewMoreBtn.style.display = \'none\';
                
                // Create "Show Less" button at the bottom
                if (!showLessBtn) {
                  // Create a container div for centering the button
                  const buttonContainer = document.createElement(\'div\');
                  buttonContainer.style.textAlign = \'center\';
                  buttonContainer.style.width = \'100%\';
                  buttonContainer.style.marginTop = \'20px\';
                  
                  // Create the button
                  showLessBtn = document.createElement(\'button\');
                  showLessBtn.innerHTML = \'<i class="fas fa-minus-circle" style="margin-right: 8px; font-size: 14px;"></i> Show Less\';
                  showLessBtn.style.backgroundColor = \'var(--primary-green)\';
                  showLessBtn.style.color = \'white\';
                  showLessBtn.style.border = \'none\';
                  showLessBtn.style.padding = \'10px 24px\';
                  showLessBtn.style.borderRadius = \'30px\';
                  showLessBtn.style.fontWeight = \'600\';
                  showLessBtn.style.cursor = \'pointer\';
                  showLessBtn.style.transition = \'all 0.3s ease\';
                  showLessBtn.style.display = \'inline-block\';
                  showLessBtn.style.fontSize = \'14px\';
                  showLessBtn.style.fontFamily = "\'Poppins\', sans-serif";
                  showLessBtn.style.boxShadow = \'0 4px 12px rgba(46, 125, 50, 0.2)\';
                  
                  // Add hover effect
                  showLessBtn.addEventListener(\'mouseenter\', function() {
                    this.style.backgroundColor = \'var(--dark-green)\';
                    this.style.transform = \'translateY(-2px)\';
                    this.style.boxShadow = \'0 6px 16px rgba(46, 125, 50, 0.3)\';
                  });
                  
                  showLessBtn.addEventListener(\'mouseleave\', function() {
                    this.style.backgroundColor = \'var(--primary-green)\';
                    this.style.transform = \'translateY(0)\';
                    this.style.boxShadow = \'0 4px 12px rgba(46, 125, 50, 0.2)\';
                  });
                  
                  // Add event listener to the "Show Less" button
                  showLessBtn.addEventListener(\'click\', function() {
                    additionalSectors.style.display = \'none\';
                    viewMoreBtn.style.display = \'inline-block\';
                    buttonContainer.remove();
                    showLessBtn = null;
                  });
                  
                  // Add the button to the container
                  buttonContainer.appendChild(showLessBtn);
                  
                  // Append the container after the additional sectors
                  additionalSectors.parentNode.insertBefore(buttonContainer, additionalSectors.nextSibling);
                }
              }
            });
            
            // Thrust Sectors functionality
            const thrustSectorData = {
              tourism: {
                title: "Tourism & Hospitality",
                desc: "Sikkim\'s tourism sector offers immense potential with its pristine landscapes, rich biodiversity, and cultural heritage.",
                points: [
                  "Eco-tourism and adventure tourism development",
                  "Luxury and wellness resorts with sustainable practices",
                  "Cultural tourism showcasing local traditions and festivals",
                  "MICE tourism (Meetings, Incentives, Conferences, Exhibitions)",
                  "Homestay and community-based tourism initiatives",
                  "Special incentives for tourism infrastructure development"
                ]
              },
              pharma: {
                title: "Pharmaceuticals",
                desc: "Sikkim has established itself as a pharmaceutical manufacturing hub with significant growth potential.",
                points: [
                  "API (Active Pharmaceutical Ingredients) manufacturing",
                  "Formulation development and manufacturing",
                  "Contract research and manufacturing services",
                  "Herbal and ayurvedic medicine production",
                  "Pharmaceutical packaging and logistics",
                  "R&D facilities with special incentives"
                ]
              },
              renewable: {
                title: "Clean and Green Energy",
                desc: "Rich in hydro resources from perennial rivers and streams.",
                points: [
                  "Total hydropower potential: 8000 MW.",
                  "2300 MW already commissioned through: Independent Power Producers (IPPs), Central PSUs like NHPC, Joint Ventures.",
                  "1000 MW under construction; expected by 2027.",
                  "Cross-Border Energy Trade possibility: Power may be exported to neighboring countries under India\'s 2021 guidelines.",
                  "Focus on Small Hydro Projects: Emphasis shifting to small, mini, and micro hydro segments. Policy supports local entrepreneurship: Only local entrepreneurs allowed to develop projects up to 5 MW. Encourages community ownership and private sector participation.",
                  "Transmission and Distribution Infrastructure: Current system: 132 kV & 66 kV lines, with 220 MVA transformation capacity. Comprehensive Scheme under implementation (with Govt. of India support): Includes: 220 kV, 132 kV & 66 kV Sub-Stations and Transmission Lines. Expected completion: early 2024.",
                  "Outcome: 220 kV pooling stations for hydro power. 132 kV Sub-Stations at District HQs. 66 kV Sub-Stations at sub-divisions/load centers.",
                  "Solar and Other Green Energy Initiatives: Climate-conscious diversification into: Solar energy, Wind energy, Green hydrogen. Solar Potential: 4.94 GWp (Gigawatt-peak). High potential for: Solar parks, Solar clusters, Agrovoltaic farming (farming + solar panel integration)."
                ]
              },
              traditional: {
                title: "Traditional Medicine Systems",
                desc: "Sikkim and the North Eastern Region (NER) are home to many traditional and herbal medicinal resources.",
                points: [
                  "An Ethnomedicine and Tourism Commission (EMTC) could be autonomously set up at the regional level under PPP mode, aimed at:",
                  "Commercializing traditional medicines",
                  "Promoting medical tourism",
                  "Medical/Wellness Tourism could be built around specific themes to attract high-value tourists for longer stays.",
                  "Investments in this sector would be:",
                  "Selective",
                  "Of high visibility",
                  "Fully coordinated with private operators",
                  "With the government providing enabling infrastructure and connectivity",
                  "Four identified tourism themes for development:",
                  "Religious",
                  "Nature / Adventure / Yoga / Wellness",
                  "Business",
                  "Recreation",
                  "The State aims to target higher-end tourists with longer stays, maintaining a moderate annual traffic growth of 10%.",
                  "With the government\'s focus on reviving yoga, meditation, and folk healing, Sikkim can play a major role in wellness tourism"
                ]
              },
              avgc: {
                title: "AVGC-XR Sector in Sikkim",
                desc: "(Animation, VFX, Gaming, Comics & Extended Reality)",
                points: [
                  "The AVGC-XR sector is a major emerging growth engine of the Indian economy with the potential to generate powerful content and intellectual property (IP).",
                  "This sector has seen unprecedented growth, attracting interest from global players looking to outsource services to India.",
                  "India is becoming a leading global destination for high-end, skill-based AVGC-XR activities.",
                  "The Media & Entertainment (M&E) industry in India is projected to grow at 8.8% CAGR by 2026.",
                  "The AVGC-XR sector can help spread Indian culture globally, connect with the diaspora, and boost employment, tourism, and allied industries.",
                  "In Sikkim, the AVGC sector is still in a nascent stage, with only a few companies currently involved.",
                  "The sector\'s current contribution to the State GSDP is minimal, with most creators producing local content.",
                  "With the right policies and support, the following growth drivers can shape the AVGC-XR sector in Sikkim:",
                  "Creative Talent: Sikkim has a young and creatively inclined population. Talents span across oral storytelling, music, cinema, theatre, food, fashion, tourism, and sports. Students in the state show a strong interest in creative subjects, making AVGC a promising sector for future employability.",
                  "Increased Technology Penetration: Rapid growth in smartphone and internet usage post-COVID. Students are increasingly consuming online learning content. Platforms like Facebook, Twitter, and YouTube have seen explosive growth in Sikkim.",
                  "Local Content Creation: There\'s a growing demand for digitally created local content. Opportunities exist to develop content based on Sikkim\'s history, cross-border cultures (Nepal, Bhutan, China, Bangladesh), biodiversity, food, and education. Local youth have already shown excellence at national and international levels.",
                  "Emergence as an Outsourcing Hub: Sikkim has the potential to become an outsourcing destination for AVGC services. With infrastructure support and investment-friendly policies, global AVGC work can be channeled into the State."
                ]
              },
              food: {
                title: "Organic Farming and Processing in Sikkim",
                desc: "Sikkim became India\'s first fully organic state in 2016.",
                points: [
                  "The State\'s organic mission aims at: Long-term soil fertility preservation. Environmental and ecological protection. Promoting healthy lifestyles. Reducing health risks from chemical exposure.",
                  "Over 75,000 hectares of farmland are certified fully organic.",
                  "Sikkim\'s major organic produce includes: Cardamom, ginger, buckwheat, turmeric, oranges, kiwis, and more.",
                  "Focus is now shifting to: Processing of organic produce. Exporting to domestic and international markets.",
                  "The State targets US $100 million (₹820 crore) in organic exports by 2030.",
                  "High investment opportunities in: Organic food production and processing. Introduction of new crop/fruit/vegetable/flower varieties.",
                  "Sikkimese farmers: Are quick learners, innovation-friendly, and entrepreneurial. Are moving away from traditional small-scale processing to modern, state-of-the-art facilities.",
                  "Strategic opportunity for investors to: Integrate into value and supply chains. Access regional markets including: Middle East, Bhutan, Nepal, Bangladesh, Myanmar, Vietnam, Thailand, Singapore, and beyond."
                ]
              },
              it: {
                title: "IT and ITeS",
                desc: "With abundance of talent in Information Technology and colleges and universities churning talent in the sector, Sikkim has high potential for development of niche sectors using IT technology.",
                points: [
                  "With the advent of Industry 4.0, new avenues for growth such as Internet of Things, Artificial Intelligence, Robotics, Automation, and Extended Reality are making their mark in the world.",
                  "The State welcomes companies and startups in this sector to invest, given the resources available in the State."
                ]
              },
              handicrafts: {
                title: "Handicrafts",
                desc: "Sikkim\'s rich cultural heritage is reflected in its diverse handicraft traditions.",
                points: [
                  "Traditional Sikkimese handicraft production",
                  "Handloom and textile crafts",
                  "Bamboo and cane products",
                  "Wood carving and thangka painting",
                  "Carpet weaving and traditional paper making",
                  "Handicraft export promotion and marketing"
                ]
              },
              climate: {
                title: "Climate Change Mitigation, Management and Studies",
                desc: "The State Government will build low carbon and resilient cities.",
                points: [
                  "It will increase energy efficiency and use renewable energy.",
                  "It will implement climate-smart agriculture and nurture forest landscapes.",
                  "The Government aims to strengthen disaster preparedness and mitigation measures.",
                  "Priority in areas of Research and Development on climate change and disaster mitigation and management will be encouraged."
                ]
              },
              electronics: {
                title: "Electronics",
                desc: "Sikkim is promoting electronics manufacturing with special incentives.",
                points: [
                  "Electronic component manufacturing",
                  "Consumer electronics assembly",
                  "Medical electronics production",
                  "PCB design and manufacturing",
                  "Electronic testing and quality control",
                  "Green electronics with sustainable practices"
                ]
              },
              biotech: {
                title: "Hydrogen in Sikkim",
                desc: "The Government of Sikkim has identified Green Hydrogen as a high-potential sector for future investment.",
                points: [
                  "Green Hydrogen will be generated using renewable energy, which is abundant in the State.",
                  "It will play a crucial role in the decarbonization of the transportation sector.",
                  "The State plans to use this technology to establish micro-grids in remote and disaster-prone areas.",
                  "Green Hydrogen also has potential applications in the fertilizer industry and other industrial sectors.",
                  "There is strong potential for exporting Green Hydrogen from Sikkim to other regions.",
                  "The Sikkim Industrial and Investment Policy 2024 ensures investor-friendly access to resources and government support for major ventures."
                ]
              },
              education: {
                title: "Education in Sikkim",
                desc: "With the advent of the New Education Policy, the State of Sikkim has prioritized quality education and setting up of world-class education institutes in the State.",
                points: [
                  "The State is inviting inter-disciplinary universities, colleges, schools, and institutions in both tertiary, professional, technical, and training and skill-building sectors to set up their campus in the midst of the salubrious environment of the State.",
                  "Sikkim has the potential to attract students from the rest of India, neighbouring countries, and the global world for educational purposes that have huge natural, field-based, cross-border, environmental, community, and agricultural heritage exposures.",
                  "Prime investors in the education sector are already visiting and negotiating with various agencies in the State.",
                  "Sikkim aspires to be a leader in green technologies and science, and institutes focussing on:",
                  "Climate change",
                  "Green technologies",
                  "Green energy",
                  "Traditional medicinal systems",
                  "Disaster management",
                  "Commercial use of biodiversity with strong emphasis on conservation",
                  "Water resources management",
                  "High value tourism",
                  "The upcoming Netaji Subhash Chandra Bose University of Excellence being established in Chakung in West Sikkim is a priority project of the State Government and is envisaged to become a global hub of learning with local ethos not only of Sikkim and the North East but covering the entire Himalayan region.",
                  "The Institute will be the first such institute in the entire Himalayan region that will undertake high quality research on the people, flora and fauna, climate change, cultural ecology, water resources, environmental issues of the Himalayan region.",
                  "This will also give a major boost to the economy of the State by attracting intellectual talent pool of scholars, research centres, and academia.",
                  "There is a huge scope for investment and collaboration with private sectors and research institutions alike."
                ]
              },
              logistics: {
                title: "Logistics",
                desc: "Improving logistics infrastructure is key to Sikkim\'s industrial development strategy.",
                points: [
                  "Warehousing and storage facilities",
                  "Cold chain infrastructure for perishables",
                  "Multi-modal logistics hubs",
                  "Last-mile delivery solutions",
                  "Border trade facilitation centers",
                  "Digital logistics and supply chain management"
                ]
              },
              film: {
                title: "Films and Media in Sikkim",
                desc: "The State has its own brief history of cinema.",
                points: [
                  "It dates back to the Kingdom of Sikkim when Satyajit Ray, widely regarded as one of the greatest filmmakers, made a documentary titled \"Sikkim\" in 1971, showcasing the socio-cultural front of the Himalayan kingdom under the Monarchy.",
                  "It can be said that his work on Sikkim laid the first foundation for a new breed of digital quest and aspiring filmmakers.",
                  "Actors like Danny Denzongpa and Geetanjali Thapa and other artists have not only brought pride and fame to the state but have strengthened the bond with the film industry and become idols for others with similar passion and dreams.",
                  "There is a pool of young Sikkimese artistes who are bound to grow in both national and global shows.",
                  "Over the years, Sikkim has served as a perfect backdrop for movies and filmmakers have used this to their advantage.",
                  "Classic movies like the Dev Anand starrer Jewel Thief and modern movies like \'Uff Yeh Mohabbat\', \'Yaariyan\', \'Qarib Qarib Single\' have all been shot around Sikkim\'s picturesque valleys, towns and landscape.",
                  "Therefore, there is ample scope for investment in film production, post film processing, media studios, films schools etc. in the State of Sikkim."
                ]
              },
              textiles: {
                title: "Textiles and Fashion Design",
                desc: "The State has a rich repository of knowledge in handloom, handicraft, and textiles, deeply woven into the culture of the region.",
                points: [
                  "The State Government aims to:",
                  "Create, support, and sustain an enabling environment for the development and growth of the handicrafts sector",
                  "Generate sustainable livelihood for people engaged in this sector across the state",
                  "Preserve and evolve traditional craft and artisanal skills, ensuring they remain an integral part of the cultural fabric of Sikkim",
                  "The government also seeks to remove constraints affecting the sector\'s growth trajectory through a multi-pronged approach involving:",
                  "Capacity building",
                  "Marketing",
                  "Product development",
                  "Patenting and trademarking",
                  "Price support",
                  "Branding support",
                  "Packaging"
                ]
              },
              wellness: {
                title: "Health and Wellness in Sikkim",
                desc: "Given the clean and pollution-free environment and greeneries all around, the State Government is positioning Sikkim as the health and wellness destination.",
                points: [
                  "Health and Wellness encompass a holistic concept that goes much beyond physical and mental health.",
                  "Today consumers are more conscientious of the ethical and environmental implications of the goods they buy and are looking for environment-friendly and sustainable products.",
                  "Sikkim and the North Eastern Region (NER) are home to many traditional and herbal medicinal resources, and investments in commercializing this resource along with promoting medical tourism will have tremendous potential in the State.",
                  "Given the focus of the government in reviving age-old practices, the State Government also intends to train its manpower into wellness experts, where manpower will be readily available for companies looking to set up their centres in the State.",
                  "Investments with modern and orthodox technology and management in:",
                  "Yoga ashrams",
                  "Meditation centres",
                  "Folk healing ventures",
                  "Hot spring and other natural therapies",
                  "Health walks and treks",
                  "Organic and slow food and drinks enterprises"
                ]
              },
              startup: {
                title: "Startup Ecosystem",
                desc: "Sikkim is building a vibrant startup ecosystem with comprehensive support systems.",
                points: [
                  "Incubation centers and startup hubs",
                  "Venture funding and financial support",
                  "Mentorship and business development services",
                  "Innovation labs and testing facilities",
                  "Startup-focused policy incentives",
                  "Networking and collaboration platforms"
                ]
              },
              smartcities: {
                title: "Smart Cities and Real Estate",
                desc: "Sikkim is the least populous state in the country with an estimated population of 0.60 million and an urban share of 25%.",
                points: [
                  "Gangtok, the capital with an area of 19.28 sq km and an estimated population of 0.1 million, attributes to 66% of the urban population share of the State, thus making it a primate city, a characteristic prevalent in most Indian states.",
                  "In order to promote a sustainable Himalayan urban growth, the State has notified the \"Gangtok 2041 – GIS based Master Plan for Gangtok\".",
                  "This perspective plan, developed under the sub-scheme \"Formulation of GIS based Master Plan\" of the AMRUT mission, covers the capital city spanning 158 sq km.",
                  "It enables the department to incorporate elements for identifying future economic nodes and unlocking economic potential through a flexible approach to urban planning.",
                  "The absence of a public transport system in most mountain and hill cities has been an impediment in unlocking the economic potential of lands, which are already in short supply due to spatial and non-spatial attributes.",
                  "The transit corridors for public transport would emerge as future economic nodes and thus have to be integrated in the master plan.",
                  "The Techno Economic Feasibility Report of Cable car as Public Transport for Gangtok has already been completed.",
                  "The proposal includes 14 stations covering a length of 13.43 km within the capital city.",
                  "Additionally, the State has prepared the Sikkim Aerial Ropeway Bill to regulate the procurement, operations, and maintenance of aerial ropeways in Sikkim.",
                  "This measure aims to promote public private partnership and ensure quality and safety of all passenger and non-passenger aerial ropeways.",
                  "As per a recommendation in the report on \"Reforms in Urban Planning Capacity in India\" by NITI Aayog, the Government of Sikkim has already initiated the revision of the existing Sikkim Urban & Regional Planning and Development Act 1998.",
                  "The revision aims to provide a suitable and adequate legal framework to promote and regulate planned development in urban, peri-urban, and hinterland areas across the State.",
                  "The extended area for urban development, with the proposed green transport network in the form of aerial cable cars and the suitable legal framework under revision, would be the crux of master planning considerations for identifying and unlocking the future economic nodes within the existing and future city limits of Gangtok.",
                  "For a small state like Sikkim, a Strategic Urban Plan (2008) was prepared for the entire state, based on a regional planning approach applicable for larger states.",
                  "The urban growth is lopsided, with 80% of the urban population residing in the East District, and hence adoption of a \"multiple nuclei urban structure\" with a projected urban share of 60% in the North & East Districts and 40% in the West & South Districts for a horizon year of 2040 has been proposed.",
                  "Thereafter, the Structure Plan for Gangtok along with the other district headquarters has been prepared.",
                  "The State Government now proposes for the sustainable and planned development of cities such as Gangtok, Pakyong, Namchi, Mangan, Soreng, and Gyalshing.",
                  "These smart cities will be powered by sustainable and green energy and shall be entirely based on green principles of planning.",
                  "The cities shall be new centres of economic growth and will further help in the development of sectors like tourism and health and wellness.",
                  "The State Government therefore invites companies and investment focusing on urban development and infrastructure, real estate development, city transport development, etc."
                ]
              },
              traderoutes: {
                title: "Trade Routes and Pilgrimage",
                desc: "Sikkim shares three international borders — China, Nepal, and Bhutan — offering vast potential for trade with these nations and BIMSTEC countries, which would boost both economy and tourism.",
                points: [
                  "The Indo-China Trade Route at Nathu La (Eastern Sikkim) was a landmark decision by the Government of India and commenced in 2006.",
                  "The Chewabhanjyang Pass, located in Uttaray village of Western Sikkim, has been identified as a potential trade route between India (Sikkim) and Nepal.",
                  "The State Government has initiated the setting up of an integrated check post at Chewabhanjyang.",
                  "Pilgrimage tourism is expected to attract a large number of visitors, helping establish Sikkim as part of the Buddhist / Pilgrimage circuit alongside Nepal, Bhutan, and China.",
                  "Heritage tourism like the Younghusband Expedition and Pilgrimage tourism is anticipated to draw interest from:",
                  "Scholars",
                  "Mountaineers",
                  "Expedition experts",
                  "Pilgrims",
                  "Students"
                ]
              },
              recreation: {
                title: "Recreation and Entertainment: Sports, Music, and Leisure",
                desc: "The leisure industry is a business segment focused on recreation, entertainment, sports, music, and tourism.",
                points: [
                  "Recreation and entertainment are increasingly vital in today\'s environment where work-life balance plays a key role in the physical and mental well-being of individuals and society.",
                  "As per data from Statista Market Insights, World Bank, IMF, UN, Eurostat:",
                  "In 2024, the estimated consumer spending per capita on culture and recreation in India is US$12.49.",
                  "The consumer spending per capita in the hospitality and restaurants sector in India is forecasted to be US$22.15.",
                  "Sikkim can become the next hub of recreation and entertainment, taking advantage of:",
                  "Its salubrious climate",
                  "Safe environment",
                  "Hospitable people"
                ]
              }
            };
            
            let currentlySelectedThrustSector = null;
            const thrustSectorItems = document.querySelectorAll(\'.thrust-sector-item\');
            const thrustSectorDetailsPanel = document.getElementById(\'thrustSectorDetails\');
            
            thrustSectorItems.forEach(item => {
              item.addEventListener(\'click\', function() {
                const sector = this.getAttribute(\'data-thrust-sector\');
                const data = thrustSectorData[sector];
                
                // If clicking the same sector that\'s already open, close it
                if (currentlySelectedThrustSector === sector && thrustSectorDetailsPanel.style.display === \'block\') {
                  thrustSectorDetailsPanel.style.display = \'none\';
                  thrustSectorItems.forEach(i => {
                    i.style.borderColor = \'rgba(76, 175, 80, 0.3)\';
                    i.style.transform = \'none\';
                  });
                  currentlySelectedThrustSector = null;
                  return;
                }
                
                // Reset all items
                thrustSectorItems.forEach(i => {
                  i.style.borderColor = \'rgba(76, 175, 80, 0.3)\';
                  i.style.transform = \'none\';
                });
                
                // Highlight selected item
                this.style.borderColor = \'var(--primary-green)\';
                this.style.transform = \'translateY(-5px)\';
                currentlySelectedThrustSector = sector;
                
                if (data) {
                  // Create points list
                  const pointsList = data.points.map(point => 
                    `<li style="margin-bottom: 12px; position: relative; padding-left: 25px;">
                       <span style="position: absolute; left: 0; color: var(--primary-green);">➤</span>
                       ${point}
                     </li>`
                  ).join(\'\');
                  
                  // Update content
                  thrustSectorDetailsPanel.innerHTML = `
                    <div style="padding: 10px;">
                      <h4 style="color: var(--primary-green); margin-top: 0; font-size: 1.4rem; margin-bottom: 15px;">
                        ${data.title}
                      </h4>
                      <p style="color: var(--text-medium); margin-bottom: 20px; line-height: 1.6;">
                        ${data.desc}
                      </p>
                      <div style="background: white; border-radius: 8px; padding: 20px; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                        <h5 style="color: var(--primary-green); margin-top: 0; margin-bottom: 15px; font-size: 1.1rem;">Key Investment Opportunities:</h5>
                        <ul style="list-style: none; padding: 0; margin: 0;">
                          ${pointsList}
                        </ul>
                      </div>
                    </div>
                  `;
                  
                  thrustSectorDetailsPanel.style.display = \'block\';
                }
              });
            });
          });
        </script>
        <!-- Large Scale Projects Section -->
        <section class="large-scale-projects-section" style="margin: 40px 0; padding: 30px 0; background: linear-gradient(120deg, #e8f5e9 0%, #b2dfdb 100%); box-shadow: 0 8px 40px 0 rgba(44, 62, 80, 0.10); border-radius: 24px; max-width: 1200px; margin-left: auto; margin-right: auto; position: relative;">
          
          <!-- Title Section with Texture -->
          <div class="container" style="max-width: 1100px; margin: 0 auto; margin-bottom: 30px;">
            <div style="position: relative; text-align: center; padding: 10px;">
              <!-- Decorative Background Pattern -->
              <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-image: linear-gradient(45deg, var(--primary-green) 25%, transparent 25%), linear-gradient(-45deg, var(--primary-green) 25%, transparent 25%); background-size: 8px 8px; opacity: 0.05; z-index: 1;"></div>
              
              <!-- Title Content -->
              <div style="position: relative; z-index: 2; background: linear-gradient(to right, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.98), rgba(255, 255, 255, 0.95)); border-radius: 16px; padding: 25px 50px; box-shadow: 0 4px 25px rgba(46, 125, 50, 0.1); display: inline-block; width: 80%;">
                <div style="display: flex; align-items: center; justify-content: center; gap: 20px;">
                  <!-- Title with fading lines on both sides -->
                  <div style="display: flex; align-items: center; justify-content: center; width: 100%;">
                    <!-- Left fading line -->
                    <div style="flex: 1; height: 2px; background: linear-gradient(to left, var(--dark-green), transparent);"></div>
                    
                    <!-- Title -->
                    <h2 class="no-underline" style="color: var(--primary-green); font-size: 1.8rem; font-weight: 700; margin: 0 15px; padding-bottom: 0; text-transform: uppercase; letter-spacing: 1px; position: relative; display: inline-block; white-space: nowrap;">
                      LARGE SCALE PROJECTS
                    </h2>
                    
                    <!-- Right fading line -->
                    <div style="flex: 1; height: 2px; background: linear-gradient(to right, var(--dark-green), transparent);"></div>
                  </div>
                </div>

                <!-- Subtitle with yellow underline -->
                <div style="margin-top: 15px; text-align: center; position: relative;">
                  <div style="color: var(--text-medium); font-size: 0.95rem; opacity: 0.9; margin-bottom: 8px;">
                    Transformative investments shaping Sikkim\'s future
                  </div>
                  <!-- Yellow underline -->
                  <div style="margin: 0 auto; width: 120px; height: 2px; background: var(--accent-gold);"></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Existing Carousel Section -->
          <div class="container" style="max-width: 1100px; margin: 0 auto; overflow: hidden;">
            <h2 style="color: var(--primary-green); font-size: 1.5rem; font-weight: 600; margin-bottom: 20px; text-align: center; letter-spacing: 0.5px; position: relative;">Featured Projects</h2>
            
            <!-- Navigation Buttons -->
            <button id="carouselPrev" aria-label="Previous" style="position: absolute; left: 4.4px; top: 60%; transform: translateY(-50%); background: white; border: 2px solid var(--accent-gold); color: var(--primary-green); border-radius: 50%; width: 44px; height: 44px; font-size: 1.6rem; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease; cursor: pointer; box-shadow: 0 2px 8px rgba(44,62,80,0.08); z-index: 10;">&lt;</button>
            <button id="carouselNext" aria-label="Next" style="position: absolute; right: 20px; top: 60%; transform: translateY(-50%); background: white; border: 2px solid var(--accent-gold); color: var(--primary-green); border-radius: 50%; width: 44px; height: 44px; font-size: 1.6rem; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease; cursor: pointer; box-shadow: 0 2px 8px rgba(44,62,80,0.08); z-index: 10;">&gt;</button>

            <div class="carousel-split-layout" style="display: flex; flex-direction: row; align-items: stretch; gap: 0; height: 500px; transition: opacity 0.3s ease;">
              <div class="carousel-text-col" style="flex: 1.2; display: flex; flex-direction: column; padding: 40px 40px 40px 0;">
                <div id="largeScaleProjectFeatures" style="height: 100%; overflow: hidden;">
                  <!-- Content will be dynamically inserted here -->
                </div>
              </div>
              <div class="carousel-img-col" style="flex: 1; display: flex; align-items: center; justify-content: center; min-width: 320px; padding: 20px;">
                <div id="largeScaleCarouselImg" style="width: 100%; max-width: 420px; height: 320px; border-radius: 22px; box-shadow: 0 6px 32px rgba(44,62,80,0.13); background: #e0f2f1; background-size: cover; background-position: center; transition: opacity 0.3s ease;"></div>
              </div>
            </div>
          </div>
        </section>

        <style>
        @media (max-width: 900px) {
          .carousel-split-layout { 
            flex-direction: column !important;
            height: auto !important;
          }
          .carousel-text-col { 
            padding: 32px 20px !important;
          }
          .carousel-img-col { 
            min-width: unset !important; 
            max-width: 100% !important; 
            justify-content: center;
            padding: 0 20px 32px 20px !important;
          }
          #largeScaleCarouselImg { 
            height: 220px !important; 
            max-width: 100% !important;
          }
          #largeScaleProjectFeatures {
            height: 300px !important;
          }
          #carouselPrev { 
            left: 10px !important;
            top: 70% !important;
          }
          #carouselNext { 
            right: 10px !important;
            top: 70% !important;
          }
        }
        
        /* Remove underline from specific heading */
        h2.no-underline:after {
          display: none !important;
          content: none !important;
        }
        
        /* Override any other styles that might add underlines or spacing for the underline */
        h2.no-underline {
          padding-bottom: 0 !important;
          margin-bottom: 0 !important;
          border-bottom: none !important;
        }
        
        /* Responsive styles for the title section */
        @media (max-width: 768px) {
          .large-scale-projects-section .container > div > div {
            width: 95% !important;
            padding: 20px 15px !important;
          }
          
          h2.no-underline {
            font-size: 1.4rem !important;
            margin: 0 10px !important;
          }
          
          /* Hide fading lines on very small screens */
          @media (max-width: 480px) {
            h2.no-underline {
              font-size: 1.2rem !important;
              margin: 0 5px !important;
            }
            
            /* Adjust the subtitle text size */
            div[style*="var(--text-medium)"] {
              font-size: 0.85rem !important;
            }
          }
        }
        </style>

        <script>
        const largeScaleProjects = [
          {
            name: "Hydro Power Projects",
            points: [
              "2000 MW HEP at Teesta River belt",
              "Investment Rs. 1000 Cr.",
              "Private Investment"
            ],
            investment: "Rs. 1000 Cr.",
            cost: "1000",
            image: "https://www.renewableenergyworld.com/wp-content/uploads/HYD/2019/08/35441-file.jpeg"
          },
          {
            name: "Food Park",
            points: [
              "Setting up of Food Park at Gyalzing",
              "Investment Rs 50 Cr"
            ],
            investment: "Rs. 50 Cr.",
            cost: "50",
            image: "https://www.shutterstock.com/image-photo/bangkok-thailand-may-2018-people-600nw-1098305588.jpg"
          },
          {
            name: "Industrial Parks",
            points: [
              "Setting up industrial Parks at Gangtok, Pakyong, Namchi, Soreng",
              "Rs.500 Cr",
              "Mode : PPP"
            ],
            investment: "Rs. 500 Cr.",
            cost: "500",
            image: "https://s3.ap-south-1.amazonaws.com/heenawebdata/front/tourmaster/Gangtok-Day-651710747581.jpeg"
          },
          {
            name: "Film Studio & Music Academy",
            points: [
              "Setting up commercial Film & Music Studio at Yangang",
              "Rs 500 Cr",
              "Mode PPP"
            ],
            investment: "Rs. 500 Cr.",
            cost: "500",
            image: "https://cdn.pixabay.com/photo/2021/08/16/05/31/film-projector-6549354_1280.jpg"
          },
          {
            name: "AVGC – XR",
            points: [
              "Creative Design/3D/Animation clusters at Gangtok",
              "Estimated cost Rs 50 Cr",
              "Private Investment/PPP"
            ],
            investment: "Rs. 50 Cr.",
            cost: "50",
            image: "https://curlytales.com/wp-content/uploads/2023/12/Games.jpg"
          },
        ];

        let currentProjectIdx = 0;

        function renderLargeScaleSplit(idx) {
          const container = document.querySelector(\'.carousel-split-layout\');
          const img = document.getElementById(\'largeScaleCarouselImg\');
          const features = document.getElementById(\'largeScaleProjectFeatures\');
          
          // Start fade out
          container.style.opacity = \'0\';
          
          setTimeout(() => {
            const p = largeScaleProjects[idx];
            // Update content with fixed layout
            features.innerHTML = `
              <div style="height: 100%; display: flex; flex-direction: column;">
                <div style="margin-bottom: 20px;">
                  <div style="font-size: 2rem; font-weight: 700; color: var(--primary-green);">${p.name}</div>
                </div>
                <div style="flex: 1; overflow-y: auto; padding-right: 10px;">
                  ${p.points.map(pt => `
                    <div style="font-size: 1.13rem; color: var(--text-medium); background: rgba(255,255,255,0.7); border-radius: 8px; padding: 12px 18px; box-shadow: 0 2px 8px rgba(44,62,80,0.04); margin-bottom: 10px;">
                      ${pt}
                    </div>
                  `).join(\'\')}
                  <div style="font-size: 1.13rem; color: var(--primary-green); font-weight: 700; background: rgba(255,255,255,0.7); border-radius: 8px; padding: 12px 18px; box-shadow: 0 2px 8px rgba(44,62,80,0.04);">
                    Investment: <span style="color: var(--text-dark); font-weight: 700;">${p.investment}</span>
                  </div>
                </div>
              </div>
            `;

            img.style.backgroundImage = `url(\'${p.image}\')`;
            
            // Fade back in
            container.style.opacity = \'1\';
          }, 300);
        }

        document.addEventListener(\'DOMContentLoaded\', function() {
          renderLargeScaleSplit(currentProjectIdx);
          
          document.getElementById(\'carouselPrev\').onclick = function() {
            currentProjectIdx = (currentProjectIdx - 1 + largeScaleProjects.length) % largeScaleProjects.length;
            renderLargeScaleSplit(currentProjectIdx);
          };
          
          document.getElementById(\'carouselNext\').onclick = function() {
            currentProjectIdx = (currentProjectIdx + 1) % largeScaleProjects.length;
            renderLargeScaleSplit(currentProjectIdx);
          };

          // Add hover effects for buttons
          [\'carouselPrev\', \'carouselNext\'].forEach(id => {
            const btn = document.getElementById(id);
            btn.onmouseover = () => {
              btn.style.background = \'var(--primary-green)\';
              btn.style.color = \'white\';
              btn.style.transform = \'translateY(-50%) scale(1.1)\';
            };
            btn.onmouseout = () => {
              btn.style.background = \'white\';
              btn.style.color = \'var(--primary-green)\';
              btn.style.transform = \'translateY(-50%) scale(1)\';
            };
          });
        });
        </script>

        <!-- Project Cards Section -->
        <section class="project-cards-section" id="investment-opportunities">
          <div class="container">
            <h2 style="color: var(--primary-green); margin-bottom: 30px; position: relative; padding-bottom: 15px;">
              <span style="background: var(--accent-gold); width: 60px; height: 4px; position: absolute; bottom: 0; left: 0;"></span>
              Investment Opportunities under Commerce and Industries Department
            </h2>

            <!-- Project Controls -->
            <div class="controls" style="background-color: white; padding: 20px; border-radius: 8px; margin-bottom: 30px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); display: flex; flex-wrap: wrap; gap: 15px;">
              <input type="text" id="searchInput" placeholder="Search by project or location" onkeyup="filterProjects()" style="padding: 10px 15px; border: 1px solid #e0e0e0; border-radius: 6px; font-size: 0.9rem; flex: 1; min-width: 200px;">
              
              <select id="modeFilter" onchange="filterProjects()" style="padding: 10px 15px; border: 1px solid #e0e0e0; border-radius: 6px; font-size: 0.9rem; min-width: 150px;">
                <option value="">All Modes</option>
                <option value="Private">Private</option>
                <option value="PPP">PPP</option>
                <option value="Joint Venture">Joint Venture</option>
              </select>


            </div>
 <!-- Project Cards Container with Navigation -->
 <div style="position: relative;">
  <div class="grid" id="projectGrid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 25px; transition: transform 0.5s ease-in-out;"></div>
  
  <!-- Desktop Navigation Arrows -->
  <button id="prevProjects" onclick="navigateProjects(\'prev\')" class="desktop-nav-arrow" style="position: absolute; left: -50px; top: 50%; transform: translateY(-50%); background: white; border: 2px solid var(--accent-gold); color: var(--primary-green); border-radius: 50%; width: 44px; height: 44px; font-size: 1.6rem; display: flex; align-items: center; justify-content: center; cursor: pointer; box-shadow: 0 2px 8px rgba(44,62,80,0.08); opacity: 0.5; transition: opacity 0.3s ease;">&lt;</button>
  <button id="nextProjects" onclick="navigateProjects(\'next\')" class="desktop-nav-arrow" style="position: absolute; right: -50px; top: 50%; transform: translateY(-50%); background: white; border: 2px solid var(--accent-gold); color: var(--primary-green); border-radius: 50%; width: 44px; height: 44px; font-size: 1.6rem; display: flex; align-items: center; justify-content: center; cursor: pointer; box-shadow: 0 2px 8px rgba(44,62,80,0.08); transition: opacity 0.3s ease;">&gt;</button>
</div>

<!-- Mobile Pagination Controls -->
<div id="mobilePagination" class="mobile-pagination" style="display: none; justify-content: center; align-items: center; gap: 15px; margin-top: 30px; padding: 20px 0;">
  <button id="prevProjectsMobile" onclick="navigateProjects(\'prev\')" class="mobile-nav-btn" style="background: var(--primary-green); color: white; border: none; border-radius: 8px; padding: 12px 20px; font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
    <i class="bi bi-chevron-left"></i> Previous
  </button>
  
  <div class="page-info" style="display: flex; align-items: center; gap: 10px; font-size: 14px; color: var(--text-medium); font-weight: 500;">
    <span>Page</span>
    <span id="currentPageNum" style="background: var(--primary-green); color: white; padding: 6px 12px; border-radius: 6px; font-weight: 600;">1</span>
    <span>of</span>
    <span id="totalPagesNum" style="color: var(--primary-green); font-weight: 600;">1</span>
  </div>
  
  <button id="nextProjectsMobile" onclick="navigateProjects(\'next\')" class="mobile-nav-btn" style="background: var(--primary-green); color: white; border: none; border-radius: 8px; padding: 12px 20px; font-size: 14px; font-weight: 600; cursor: pointer; transition: all 0.3s ease; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
    Next <i class="bi bi-chevron-right"></i>
  </button>
</div>

            <!-- Project Cards JavaScript -->
            <script>
            // Project data and functions
            const projects = [
              {
                name: "Industrial Parks",
                location: "Gangtok, Pakyong, Namchi, Soreng, Gyalzing District",
                cost: "100",
                mode: "PPP",
                department: "Commerce & Industries Department",
                employment: "300+ jobs per park",
                support: "Identification of location, Project Clearance, Funding through Govt. schemes",
                features: "Strategic locations, Infrastructure support, Government backing",
                image: "https://www.groundxero.in/wp-content/uploads/2019/04/sikkim-plant-1.jpg"
              },
              {
                name: "e-Vehicle Manufacturing",
                location: "Pakyong District",
                cost: "200",
                mode: "Private",
                department: "Commerce & Industries Department",
                employment: "250+ jobs",
                support: "Project Clearance, facilitation by C&I Deptt",
                features: "Proximity to ASEAN markets, Green industry incentives, Local skill development",
                image: "https://bsmedia.business-standard.com/_media/bs/img/article/2020-09/14/full/1600029403-4678.jpg?im=FeatureCrop,size=(826,465)"
              },
              {
                name: "Logistics Park",
                location: "Rangpo, Sikkim",
                cost: "100",
                mode: "PPP",
                department: "Commerce & Industries Department",
                employment: "120+ jobs",
                support: "Project Clearance, facilitation by C&I Deptt",
                features: "Warehousing, Cold storage, Strategic location",
                image: "https://bhoomiipark.com/wp-content/uploads/2024/08/Logistic-Park-1.jpg"
              },
              {
                name: "Creative Design Studio",
                location: "Multiple Districts",
                cost: "100",
                mode: "PPP",
                department: "Commerce & Industries Department",
                employment: "100+ jobs",
                support: "Project Clearance, facilitation by C&I Deptt",
                features: "3D/Animation facilities, Creative hub, Digital innovation",
                image: "https://www.shutterstock.com/image-photo/team-work-group-young-business-600nw-572804956.jpg"
              },
              {
                name: "Film Studio",
                location: "Multiple Districts",
                cost: "100",
                mode: "PPP",
                department: "Commerce & Industries Department",
                employment: "90+ jobs",
                support: "Project Clearance, facilitation by C&I Deptt",
                features: "Editing facilities, Production support, Scenic locations",
                image: "https://media1.thrillophilia.com/filestore/hoy3ugtqqecbvtn8t80sycyfjkt8_1524230200_flimcityyjpg.jpg?w=400&dpr=2"
              },
              {
                name: "Micro Breweries",
                location: "Multiple Districts",
                cost: "35",
                mode: "Private",
                department: "Commerce & Industries Department",
                employment: "40+ jobs",
                support: "Project Clearance, facilitation by C&I Deptt",
                features: "Craft beer production, Tourism integration, Local ingredients",
                image: "https://council.ie/wp-content/uploads/2015/07/Craft-Beer.jpg"
              },
              {
                name: "Sikkim Carpet Manufacturing",
                location: "Multiple Districts",
                cost: "10",
                mode: "PPP",
                department: "Commerce & Industries Department",
                employment: "50+ jobs",
                support: "Project Clearance, facilitation by C&I Deptt, Part Funding through Govt. schemes",
                features: "Traditional craftsmanship, Export potential, Cultural heritage",
                image: "https://spaindustrialdesign.wordpress.com/wp-content/uploads/2020/12/5-1.jpg?w=1000"
              },
              {
                name: "Packing Material Manufacturing",
                location: "Rangpo/Melli",
                cost: "30",
                mode: "PPP",
                department: "Commerce & Industries Department",
                employment: "45+ jobs",
                support: "Facilitation by C&I Deptt, Part funding from Govt. schemes",
                features: "Local industry support, Sustainable packaging, Market demand",
                image: "https://i.ytimg.com/vi/xNePYj2GydM/maxresdefault.jpg"
              },
              {
                name: "Food Processing Unit",
                location: "Soreng, Gyalzing district",
                cost: "20",
                mode: "PPP",
                department: "Commerce & Industries Department",
                employment: "40+ jobs",
                support: "Facilitation by C&I Deptt, Part funding from Govt. schemes",
                features: "Processing of local produce, Value addition, Export potential",
                image: "https://vikalpsangam.org/wp-content/uploads/migrate/Perspectives/sikkimperspective4.jpg"
              },
              {
                name: "Trout Fish Processing",
                location: "Multiple Districts",
                cost: "20",
                mode: "PPP",
                department: "Commerce & Industries Department",
                employment: "35+ jobs",
                support: "Project Clearance, facilitation by C&I Deptt",
                features: "Premium fish products, Export potential, Local resource utilization",
                image: "https://www.hatchmag.com/sites/default/files/styles/extra-large/public/field/image/553A1958.jpg"
              },
              {
                name: "Meat Processing Cluster",
                location: "Multiple Districts",
                cost: "10",
                mode: "Private",
                department: "Commerce & Industries Department",
                employment: "30+ jobs",
                support: "Facilitation by C&I Deptt, Part funding from Govt. schemes",
                features: "Modern processing facilities, Quality standards, Market demand",
                image: "https://static.investindia.gov.in/s3fs-public/2021-05/shutterstock_295431182.jpg"
              },
              {
                name: "Traditional Furniture Making Cluster",
                location: "Multiple Districts",
                cost: "20",
                mode: "PPP",
                department: "Commerce & Industries Department",
                employment: "40+ jobs",
                support: "Facilitation by C&I Deptt, Part funding from Govt. schemes",
                features: "Traditional craftsmanship, Pepperfry tie-up, Market access",
                image: "https://plyinsight.com/wp-content/uploads/2023/09/Screenshot-2023-09-14-130459.png"
              },
              {
                name: "Soft Toys Making Cluster",
                location: "Multiple Districts",
                cost: "20",
                mode: "PPP",
                department: "Commerce & Industries Department",
                employment: "35+ jobs",
                support: "Facilitation by C&I Deptt, Part funding from Govt. schemes",
                features: "Handmade toys, Local employment, Export potential",
                image: "https://dsource.in/sites/default/files/resource/soft-toys-sikkim/introduction/images/introduction-toys-1000.jpg"
              },
              {
                name: "Mineral Water Packaging",
                location: "Rhenock",
                cost: "20",
                mode: "Private",
                department: "Commerce & Industries Department",
                employment: "30+ jobs",
                support: "Project Clearance, facilitation by C&I Deptt",
                features: "Natural spring water, Premium packaging, Market demand",
                image: "https://changestarted.com/wp-content/uploads/2020/03/bamboo_bottle-725x500.jpg"
              },
              {
                name: "Fruit Wine Manufacture",
                location: "Daramdin",
                cost: "15",
                mode: "Private",
                department: "Commerce & Industries Department",
                employment: "25+ jobs",
                support: "Project Clearance, facilitation by C&I Deptt",
                features: "Local fruit utilization, Premium products, Tourism integration",
                image: "https://www.marutimacpack.com/Admin/img/products/1653132170natural-fruit-juice-processing-plant-500x500.jpg"
              },
              {
                name: "Amusement Park",
                location: "Rumtek",
                cost: "100",
                mode: "Private",
                department: "Commerce & Industries Department",
                employment: "29 jobs",
                support: "Project Clearance, facilitation by C&I Deptt",
                features: "Amusement and recreation, Tourism boost, Family entertainment",
                image: "https://media-cdn.tripadvisor.com/media/photo-s/03/cd/eb/cc/khangchendzonga-tourist.jpg"
              },
            ];

            let currentPage = 0;
            const projectsPerPage = 8;

            function renderProjects(data) {
              const grid = document.getElementById(\'projectGrid\');
              grid.innerHTML = \'\';
              
              if (data.length === 0) {
                grid.innerHTML = \'<div class="col-12 text-center py-5"><h5>No projects found matching your criteria</h5></div>\';
                return;
              }

              // Calculate total pages
              const totalPages = Math.ceil(data.length / projectsPerPage);
              
              // Get current page\'s projects
              const start = currentPage * projectsPerPage;
              const end = start + projectsPerPage;
              const currentProjects = data.slice(start, end);
              
              // Update navigation buttons
              document.getElementById(\'prevProjects\').style.opacity = currentPage === 0 ? \'0.5\' : \'1\';
              document.getElementById(\'nextProjects\').style.opacity = currentPage >= totalPages - 1 ? \'0.5\' : \'1\';
              
              // Render current page\'s projects
              currentProjects.forEach(p => {
                const card = document.createElement(\'div\');
                card.className = \'card\';
                card.style.opacity = \'0\';
                card.style.transform = \'translateY(20px)\';
                card.style.transition = \'opacity 0.5s ease, transform 0.5s ease\';
                card.innerHTML = `
                  <div class="card-img" style="background-image: url(\'${p.image}\')"></div>
                  <div class="card-content">
                    <h3>${p.name}</h3>
                    <p><strong>Investment:</strong> ₹${p.cost} Cr</p>
                    <p><strong>Location:</strong> ${p.location}</p>
                    <span class="card-tag card-tag-mode">${p.mode}</span>
                  </div>
                `;
                card.onclick = () => openModal(p);
                grid.appendChild(card);
                
                // Trigger animation after a small delay
                setTimeout(() => {
                  card.style.opacity = \'1\';
                  card.style.transform = \'translateY(0)\';
                }, 50);
              });
            }

            function navigateProjects(direction) {
              const filteredProjects = getFilteredProjects();
              const totalPages = Math.ceil(filteredProjects.length / projectsPerPage);
              
              if (direction === \'next\' && currentPage < totalPages - 1) {
                currentPage++;
              } else if (direction === \'prev\' && currentPage > 0) {
                currentPage--;
              }
              
              renderProjects(filteredProjects);
            }

            function getFilteredProjects() {
              const search = document.getElementById(\'searchInput\').value.toLowerCase();
              const mode = document.getElementById(\'modeFilter\').value;

              return projects.filter(p => {
                return (
                  (p.name.toLowerCase().includes(search) || p.location.toLowerCase().includes(search)) &&
                  (mode === \'\' || p.mode === mode)
                );
              });
            }

            function filterProjects() {
              currentPage = 0; // Reset to first page when filtering
              renderProjects(getFilteredProjects());
            }

            function openModal(project) {
              document.getElementById(\'modalTitle\').textContent = project.name;
              document.getElementById(\'modalLocation\').textContent = project.location;
              document.getElementById(\'modalCost\').textContent = project.cost;
              document.getElementById(\'modalMode\').textContent = project.mode;
              document.getElementById(\'modalEmployment\').textContent = project.employment;
              document.getElementById(\'modalSupport\').textContent = project.support;
              document.getElementById(\'modalFeatures\').textContent = project.features;
              document.getElementById(\'projectModal\').style.display = \'flex\';
            }

            function closeModal() {
              document.getElementById(\'projectModal\').style.display = \'none\';
            }

            // Initialize
            document.addEventListener(\'DOMContentLoaded\', function() {
              renderProjects(projects);
              
              // Add tab functionality
              const tabBtns = document.querySelectorAll(\'.tab-btn\');
              const tabContents = document.querySelectorAll(\'.tab-content\');
              
              tabBtns.forEach((btn, index) => {
                btn.addEventListener(\'click\', function() {
                  // Remove active class from all buttons and contents
                  tabBtns.forEach(b => {
                    b.style.background = \'#e0e0e0\';
                    b.style.color = \'var(--text-dark)\';
                  });
                  tabContents.forEach(content => {
                    content.style.display = \'none\';
                  });
                  
                  // Add active class to clicked button
                  this.style.background = \'var(--primary-green)\';
                  this.style.color = \'white\';
                  
                  // Show corresponding content
                  tabContents[index].style.display = \'block\';
                });
              });
            });
            </script>

            <!-- Modal for Project Details -->
            <div class="modal" id="projectModal" onclick="closeModal()" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); z-index: 1000; justify-content: center; align-items: center;">
              <div class="modal-content" onclick="event.stopPropagation();" style="background-color: white; padding: 30px; border-radius: 10px; max-width: 600px; width: 90%; max-height: 80vh; overflow-y: auto; box-shadow: 0 5px 30px rgba(0,0,0,0.3); position: relative;">
                <h2 id="modalTitle" style="color: var(--primary-green); margin-bottom: 20px; padding-bottom: 10px; border-bottom: 2px solid var(--lighter-green);"></h2>
                <p><strong>Location:</strong> <span id="modalLocation"></span></p>
                <p><strong>Investment:</strong> ₹<span id="modalCost"></span> Cr</p>
                <p><strong>Mode:</strong> <span id="modalMode"></span></p>
                <p><strong>Employment Potential:</strong> <span id="modalEmployment"></span></p>
                <p><strong>Govt. Support:</strong> <span id="modalSupport"></span></p>
                <p><strong>Key Features:</strong> <span id="modalFeatures"></span></p>
                <button onclick="closeModal()" style="background: linear-gradient(135deg, #3a8a3f 0%, #2c6e30 100%); color: white; border: none; padding: 10px 24px; border-radius: 30px; cursor: pointer; margin-top: 20px; transition: all 0.3s ease; box-shadow: 0 4px 12px rgba(46, 125, 50, 0.2); position: relative; overflow: hidden;">
                  <span style="position: relative; z-index: 2;">Close</span>
                  <span style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, var(--accent-gold) 0%, #ffb300 100%); opacity: 0; transition: opacity 0.3s ease; z-index: 1;"></span>
                </button>
                
                <style>
                  .modal-content button:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 6px 15px rgba(46, 125, 50, 0.25);
                  }
                  .modal-content button:hover span:last-child {
                    opacity: 0.15;
                  }
                </style>
              </div>
            </div>
          </div>
        </section>
           <!-- Interactive Map Section -->
           <div class="section-card strategic-location-section" id="strategicLocationSection">
            <div class="section-title strategic-location-title">
              <h2>Strategic Location Advantage</h2>
              <p>Sikkim\'s unique position offers exceptional connectivity and market access</p>
            </div>
            
            <div style="display: flex; flex-wrap: wrap; gap: 25px;">
              <div style="flex: 1; min-width: 300px;">
                <div id="sikkim-map" class="sikkim-map" style="width: 100%; height: 280px; display: flex; align-items: center; justify-content: center; background: #f5f7fa; position: relative;">
                  <iframe
                    width="100%"
                    height="280"
                    frameborder="0"
                    scrolling="no"
                    marginheight="0"
                    marginwidth="0"
                    src="https://www.openstreetmap.org/export/embed.html?bbox=88.2,27.1,88.8,28.1&amp;layer=mapnik"
                    style="border: none;"
                  ></iframe>
                  <div class="map-attribution">📍 Location Powered by OpenStreetMap</div>
                </div>
                
                <!-- Districts of Sikkim Section -->
                <div style="margin-top: 25px; background: rgba(255,255,255,0.7); border-radius: 12px; padding: 20px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                  <h3 style="color: var(--dark-green); margin-top: 0; margin-bottom: 15px; font-size: 20px; position: relative; padding-bottom: 10px;">
                    Districts of Sikkim
                    <span style="position: absolute; bottom: 0; left: 0; width: 40px; height: 3px; background: var(--accent-gold);"></span>
                  </h3>
                  <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(120px, 1fr)); gap: 10px;">
                    <div class="district-chip active" data-district="gangtok">
                      <h4>Gangtok</h4>
                      <p>State Capital</p>
                    </div>
                    <div class="district-chip" data-district="pakyong">
                      <h4>Pakyong</h4>
                      <p>Airport</p>
                    </div>
                    <div class="district-chip" data-district="namchi">
                      <h4>Namchi</h4>
                    </div>
                    <div class="district-chip" data-district="soreng">
                      <h4>Soreng</h4>
                    </div>
                    <div class="district-chip" data-district="mangan">
                      <h4>Mangan</h4>
                    </div>
                    <div class="district-chip" data-district="gyalshing">
                      <h4>Gyalshing</h4>
                    </div>
                  </div>
                </div>
              </div>
              
              <div style="flex: 1; min-width: 300px;">
                <div style="background: rgba(255,255,255,0.7); border-radius: 12px; padding: 18px; box-shadow: 0 5px 15px rgba(0,0,0,0.05);">
                  <h3 style="color: var(--dark-green); margin-top: 0; margin-bottom: 16px; font-size: 20px; position: relative; padding-bottom: 10px;">
                    Connectivity Highlights
                    <span style="position: absolute; bottom: 0; left: 0; width: 40px; height: 3px; background: var(--primary-green);"></span>
                  </h3>
                  <ul style="margin: 0; padding-left: 0; list-style: none;">
                    <li class="connectivity-item">
                      <div class="highlight-number">1</div>
                      <div>
                        <strong style="display: block; margin-bottom: 4px; font-size: 15px; color: var(--primary-green);">Road Network</strong>
                        <span style="font-size: 13px; line-height: 1.4; color: var(--text-medium);">NH10 connects to West Bengal. Additional highways NH310, NH310A, NH717B provide border connectivity.</span>
                      </div>
                    </li>
                    <li class="connectivity-item">
                      <div class="highlight-number">2</div>
                      <div>
                        <strong style="display: block; margin-bottom: 4px; font-size: 15px; color: var(--primary-green);">Air Connectivity</strong>
                        <span style="font-size: 13px; line-height: 1.4; color: var(--text-medium);">Pakyong Airport (30km) - Delhi, Kolkata, Guwahati flights. Bagdogra Airport (88km) - 40+ daily flights.</span>
                      </div>
                    </li>
                    <li class="connectivity-item">
                      <div class="highlight-number">3</div>
                      <div>
                        <strong style="display: block; margin-bottom: 4px; font-size: 15px; color: var(--primary-green);">Rail Network</strong>
                        <span style="font-size: 13px; line-height: 1.4; color: var(--text-medium);">NJP station (80km) connects major cities. Sevoke-Rangpo Railway coming by 2025.</span>
                      </div>
                    </li>
                    <li class="connectivity-item">
                      <div class="highlight-number">4</div>
                      <div>
                        <strong style="display: block; margin-bottom: 4px; font-size: 15px; color: var(--primary-green);">Intra-State Mobility</strong>
                        <span style="font-size: 13px; line-height: 1.4; color: var(--text-medium);">Highest road density in Northeast India (394.3 km per 1000 sq km) with excellent district connectivity.</span>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          
        <!-- Pre-footer -->
        <section class="pre-footer" id="contact">
          <!-- Simple background -->
          <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.1;"></div>
          
          <div class="container" style="position: relative; z-index: 2;">
            <div class="row" style="display: flex; flex-wrap: wrap; gap: 40px; align-items: center;">
              <div class="col-md-6" style="flex: 1; min-width: 300px;">
                <h3 style="color: var(--accent-gold); margin-bottom: 20px; font-size: 2.2rem; font-weight: 700; text-shadow: 0 2px 4px rgba(0,0,0,0.1);">Ready to Invest in Sikkim?</h3>
                <p style="font-size: 1.1rem; line-height: 1.6; margin-bottom: 25px; opacity: 0.95;">Sikkim offers a unique combination of natural beauty, strategic location, and investor-friendly policies. Our dedicated team is here to guide you through every step of your investment journey.</p>
                <a href="contact-form.html" class="btn btn-outline-light" style="padding: 12px 30px; border-radius: 50px; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; border-width: 2px; transition: all 0.3s ease; display: inline-flex; align-items: center; gap: 10px;">
                  <span>Contact Our Investment Team</span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16" style="margin-top: 1px;">
                    <path d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                  </svg>
                </a>
              </div>
              <div class="col-md-6" style="flex: 1; min-width: 300px;">
                <div style="background: rgba(255,255,255,0.1); border-radius: 16px; padding: 30px; backdrop-filter: blur(10px);">
                  <h3 style="color: var(--accent-gold); margin-bottom: 25px; font-size: 1.5rem;">Investment Support</h3>
                  <ul class="feature-list" style="list-style: none; padding: 0; margin: 0;">
                    <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 12px;">
                      <div style="background: var(--accent-gold); width: 28px; height: 28px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--primary-green)" viewBox="0 0 16 16">
                          <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                        </svg>
                      </div>
                      <span style="font-size: 1.1rem;">Single window clearance for all approvals</span>
                    </li>
                    <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 12px;">
                      <div style="background: var(--accent-gold); width: 28px; height: 28px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--primary-green)" viewBox="0 0 16 16">
                          <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                        </svg>
                      </div>
                      <span style="font-size: 1.1rem;">Dedicated project facilitation team</span>
                    </li>
                    <li style="margin-bottom: 15px; display: flex; align-items: center; gap: 12px;">
                      <div style="background: var(--accent-gold); width: 28px; height: 28px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--primary-green)" viewBox="0 0 16 16">
                          <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                        </svg>
                      </div>
                      <span style="font-size: 1.1rem;">Customized incentive packages</span>
                    </li>
                    <li style="display: flex; align-items: center; gap: 12px;">
                      <div style="background: var(--accent-gold); width: 28px; height: 28px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="var(--primary-green)" viewBox="0 0 16 16">
                          <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                        </svg>
                      </div>
                      <span style="font-size: 1.1rem;">Aftercare services for existing investors</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- Links Footer -->
        <section class="links-footer">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <h3>Quick Links</h3>
                <ul>
                  <li><a href="#home">Home</a></li>
                  <li><a href="#about">About Us</a></li>
                  <li><a href="#investment-opportunities">Investment Opportunities</a></li>
                  <li><a href="#policies-incentives">Policies & Incentives</a></li>
                  <li><a href="#contact">Contact Us</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6">
                <h3>Investment Sectors</h3>
                <ul>
                  <li><a href="#">Hydropower & Renewable Energy</a></li>
                  <li><a href="#">Tourism & Hospitality</a></li>
                  <li><a href="#">Organic Agriculture</a></li>
                  <li><a href="#">IT & ITES</a></li>
                  <li><a href="#">Pharmaceuticals</a></li>
                </ul>
              </div>

              <div class="col-lg-3 col-md-6">
                <h3>Contact Us</h3>
                <div class="contact-info">
                  <p><strong>Shri M.Ravikumar</strong>, Director<br>
                    Department of Commerce & Industries, <br>
                  Government of Sikkim,<br>
                  Gangtok - 737102</p>
                  <p><strong>Phone:</strong>+91 9593977946</p>
                  <p><strong>Email:</strong>directormsmecni@gmail.com </p>
                </div>
              </div>

              <div class="col-lg-3 col-md-6">
                <h3>About Sikkim</h3>
                <div class="about-text">
                  <p>Sikkim is India\'s first organic state and one of the most peaceful regions in the country. With its breathtaking landscapes, rich biodiversity, and investor-friendly policies, Sikkim offers unique opportunities for sustainable development.</p>
                </div>
                <!-- Image Disclaimer -->
                <div style="max-width: 420px; margin: 12px auto 0 auto; padding: 10px 16px; background: linear-gradient(90deg, #e8f5e9 80%, #fff8e1 100%); border-left: 5px solid #ffd700; border-radius: 10px; box-shadow: 0 1px 6px rgba(44,62,80,0.05); text-align: center; font-size: 0.97rem; color: var(--primary-green); font-family: \'Poppins\', sans-serif; font-weight: 500;">
                  <span style="color: var(--accent-gold); font-size: 1.1em; margin-right: 6px; vertical-align: middle;">&#9888;</span>
                  Images are for illustration purposes only.
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
  </main>



  <!-- Original Footer -->
  <footer id="footer">
    <div class="footer-top">
    </div>
    <div class="row2 small" style="background-color:white">
      <div class="imagegroup2" style="animation-delay: 1s;">
        <a href="https://www.sikkim.gov.in" target="_blank"><img src="https://industries.sikkim.gov.in/logos/sikkgov.png" alt=""></a>
        <a href="https://pmfme.mofpi.gov.in/pmfme/#/Home-Page" target="_blank"><img src="https://industries.sikkim.gov.in/logos/pmfme.png" alt=""></a>
        <a href="https://unnati.dpiit.gov.in//" target="_blank"><img src="https://industries.sikkim.gov.in/logos/unnati.png" alt=""></a>
        <a href="https://pmvishwakarma.gov.in/" target="_blank"><img src="https://industries.sikkim.gov.in/logos/pfme.png" alt=""></a>
        <a href="https://scsthub.in/" target="_blank"><img src="https://industries.sikkim.gov.in/logos/nssh.png" alt=""></a>
        <a href="https://sfurti.msme.gov.in/SFURTI/Home.aspx" target="_blank"><img src="https://industries.sikkim.gov.in/logos/sfurti.jfif" alt=""></a>
        <a href="https://msme.gov.in/prime-minister-employment-generation-programme-and-other-credit-support-schemes" target="_blank"><img src="https://industries.sikkim.gov.in/logos/pmegp.png" alt=""></a>
        <a href="https://inspires.sikkim.gov.in/" target="_blank"><img src="https://industries.sikkim.gov.in/logos/inspireslogo.png" alt=""></a>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        © Copyright <strong><span>DIT</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer>

  <!-- Additional JS Files -->
  <script src="https://industries.sikkim.gov.in/assets/admin/assets/js/backend-bundle.min.js"></script>
  <script src="https://industries.sikkim.gov.in/assets/admin/assets/js/table-treeview.js"></script>
  <script src="https://industries.sikkim.gov.in/assets/admin/assets/js/customizer.js"></script>
  <script src="https://industries.sikkim.gov.in/assets/admin/assets/js/chart-custom.js"></script>
  <script src="https://industries.sikkim.gov.in/assets/admin/assets/js/app.js"></script>
  <script src="https://industries.sikkim.gov.in/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="https://industries.sikkim.gov.in/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="https://industries.sikkim.gov.in/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="https://industries.sikkim.gov.in/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="https://industries.sikkim.gov.in/assets/vendor/php-email-form/validate.js"></script>
  <script src="https://industries.sikkim.gov.in/assets/js/main.js"></script>
  <script>
  // District bounding boxes and centers for OpenStreetMap
  const districtMapData = {
    gangtok: {
      bbox: \'88.55,27.25,88.75,27.45\',
      center: \'27.33,88.62\',
      zoom: 12
    },
    pakyong: {
      bbox: \'88.65,27.15,88.85,27.35\',
      center: \'27.25,88.75\',
      zoom: 12
    },
    namchi: {
      bbox: \'88.30,27.10,88.45,27.35\',
      center: \'27.25,88.38\',
      zoom: 12
    },
    soreng: {
      bbox: \'88.10,27.15,88.30,27.35\',
      center: \'27.25,88.20\',
      zoom: 12
    },
    mangan: {
      bbox: \'88.40,27.55,88.70,27.85\',
      center: \'27.70,88.55\',
      zoom: 12
    },
    gyalshing: {
      bbox: \'88.10,27.30,88.35,27.55\',
      center: \'27.45,88.22\',
      zoom: 12
    }
  };

  document.querySelectorAll(\'.district-chip\').forEach(chip => {
    chip.addEventListener(\'click\', function() {
      // Remove active class from all chips
      document.querySelectorAll(\'.district-chip\').forEach(c => c.classList.remove(\'active\'));
      
      // Add active class to clicked chip
      this.classList.add(\'active\');
      
      const district = this.getAttribute(\'data-district\');
      const map = districtMapData[district];
      if (map) {
        // Update the OpenStreetMap iframe src
        const iframe = document.querySelector(\'#sikkim-map iframe\');
        iframe.src = `https://www.openstreetmap.org/export/embed.html?bbox=${map.bbox}&layer=mapnik&marker=${map.center}`;
      }
    });
  });
  
  // Intersection Observer for fade-in animation
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add(\'visible\');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1 });
  
  // Observe the strategic location section
  observer.observe(document.getElementById(\'strategicLocationSection\'));
  </script>
  <script>
  document.addEventListener(\'DOMContentLoaded\', function() {
    // Mobile navigation toggle
    const navToggle = document.querySelector(\'.mobile-nav-toggle\');
    const navbar = document.querySelector(\'.navbar\');
    const body = document.body;
    
    if (navToggle && navbar) {
      navToggle.addEventListener(\'click\', function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        // Toggle mobile navigation
        navbar.classList.toggle(\'mobile-nav-active\');
        body.classList.toggle(\'mobile-nav-active\');
        
        // Toggle hamburger/close icon
        if (navbar.classList.contains(\'mobile-nav-active\')) {
          navToggle.classList.add(\'active\');
        } else {
          navToggle.classList.remove(\'active\');
          // Close all dropdowns when closing menu
          document.querySelectorAll(\'.navbar .dropdown\').forEach(dropdown => {
            dropdown.classList.remove(\'active\');
          });
        }
      });
      
      // Close menu when clicking on backdrop
      navbar.addEventListener(\'click\', function(e) {
        if (e.target === navbar && navbar.classList.contains(\'mobile-nav-active\')) {
          navbar.classList.remove(\'mobile-nav-active\');
          body.classList.remove(\'mobile-nav-active\');
          navToggle.classList.remove(\'active\');
          // Close all dropdowns
          document.querySelectorAll(\'.navbar .dropdown\').forEach(dropdown => {
            dropdown.classList.remove(\'active\');
          });
        }
      });
    }
    
    // Dropdown toggle for mobile
    document.querySelectorAll(\'.navbar .dropdown > a\').forEach(link => {
      link.addEventListener(\'click\', function(e) {
        if (window.innerWidth <= 991) {
          e.preventDefault();
          e.stopPropagation();
          
          const parent = this.parentElement;
          const isActive = parent.classList.contains(\'active\');
          
          // Close all other dropdowns
          document.querySelectorAll(\'.navbar .dropdown\').forEach(dropdown => {
            if (dropdown !== parent) {
              dropdown.classList.remove(\'active\');
            }
          });
          
          // Toggle current dropdown
          if (isActive) {
            parent.classList.remove(\'active\');
          } else {
            parent.classList.add(\'active\');
          }
        }
      });
    });
    
    // Close mobile menu when clicking on regular links (not dropdowns)
    document.querySelectorAll(\'.navbar ul li:not(.dropdown) > a\').forEach(link => {
      link.addEventListener(\'click\', function() {
        if (window.innerWidth <= 991 && navbar.classList.contains(\'mobile-nav-active\')) {
          navbar.classList.remove(\'mobile-nav-active\');
          body.classList.remove(\'mobile-nav-active\');
          navToggle.classList.remove(\'active\');
        }
      });
    });
    
    // Close mobile menu when clicking on dropdown links
    document.querySelectorAll(\'.navbar .dropdown ul a\').forEach(link => {
      link.addEventListener(\'click\', function() {
        if (window.innerWidth <= 991 && navbar.classList.contains(\'mobile-nav-active\')) {
          navbar.classList.remove(\'mobile-nav-active\');
          body.classList.remove(\'mobile-nav-active\');
          navToggle.classList.remove(\'active\');
          // Close all dropdowns
          document.querySelectorAll(\'.navbar .dropdown\').forEach(dropdown => {
            dropdown.classList.remove(\'active\');
          });
        }
      });
    });
    
    // Handle window resize
    window.addEventListener(\'resize\', function() {
      if (window.innerWidth > 991) {
        // Reset mobile navigation on desktop
        navbar.classList.remove(\'mobile-nav-active\');
        body.classList.remove(\'mobile-nav-active\');
        navToggle.classList.remove(\'active\');
        document.querySelectorAll(\'.navbar .dropdown\').forEach(dropdown => {
          dropdown.classList.remove(\'active\');
        });
      }
    });
  });
  </script>
</body>
</html>
';
?>