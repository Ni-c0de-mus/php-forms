<!DOCTYPE html>
<html>

<head>
 <meta charset="utf-8">
 <link type="text/css" href="style.css" media="screen" rel="stylesheet" />
 <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
 <style>
  <?php include('css/style.css'); ?>
 </style>
 <script src="app.js"></script>
 <title>JavaScript DOM Tutorials</title>
</head>

<body>
 <header id="header">
  <!-- Navigation -->
  <nav id="nav">
   <!-- Nav Brand -->
   <div class="nav__brand"><img src="img/mw-logo-light.svg" alt=""></div>
   <!-- Menu Icons -->
   <div class="menu__icons open"><i class="icon ion-md-menu"></i></div>
   <!-- Nav List -->
   <ul class="nav__list">
    <!-- Menu Icon Close-->
    <div class="menu__icons close"><i class="icon ion-md-close"></i></div>
    <li class="nav__item"><a href="index.php" class="nav__link">Home</a></li>
    <li class="nav__item"><a href="index2.php" class="nav__link">Services</a></li>
    <li class="nav__item"><a href="index3.php" class="nav__link">Products</a></li>
    <li class="nav__item"><a href="index4.php" class="nav__link">Careers</a></li>
    <li class="nav__item"><a href="index5.php" class="nav__link">About</a></li>
   </ul>
  </nav>
 </header>
 <section id="hero">
  <div class="container">
   <div class="main__message">
    <h3>How to create nice</h3>
    <h1>Forms</h1>
    <p>Alice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do: once or twice she had peeped into the book her sister was reading,</p>
    <div class="cta"><a href="" class="btn">See How</a></div>
   </div>
  </div>
 </section>
 <div id="wrapper">
  <header>
   <div id="page-banner">
    <h1 class="title">Bookorama</h1>
    <p>Books for Ninjas</p>
    <form id="search-books">
     <input type="text" placeholder="Search books..." />
    </form>
   </div>
  </header>
  <div id="book-list">
   <h2 class="title">Books to Read</h2>
   <ul>
    <li>
     <span class="name">Name of the Wind</span>
     <span class="delete">delete</span>
    </li>
    <li>
     <span class="name">The Wise Man's Fear</span>
     <span class="delete">delete</span>
    </li>
    <li>
     <span class="name">Kafka on the Shore</span>
     <span class="delete">delete</span>
    </li>
    <li>
     <span class="name">The Master and the Margarita</span>
     <span class="delete">delete</span>
    </li>
   </ul>
  </div>
  <form id="add-book">
   <input type="checkbox" id="hide" />
   <label for="hide">Hide all books</label>
   <input type="text" placeholder="Add a book..." />
   <button>Add</button>
  </form>
  <div id="tabbed-content">
   <ul class="tabs">
    <li data-target="#about" class="active">About</li>
    <li data-target="#contact">Contact</li>
   </ul>
   <div class="panel active" id="about">
    <p>Content for about tab...</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id nunc porta urna ornare rhoncus. Ut convallis ante at.</p>
   </div>
   <div class="panel" id="contact">
    <p>Content for contact tab...</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id nunc porta urna ornare rhoncus. Ut convallis ante at.</p>
   </div>
  </div>
 </div>
 <script>
  <?php include('js/scripts.js'); ?>
  <?php include('js/nav-menu.js'); ?>
  <?php include('js/app.js'); ?>
 </script>
</body>

</html>