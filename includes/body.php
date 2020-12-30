<div class="container">
  <?php

    if (isset($_GET['page']) && '' != $_GET['page']) {
        $page = '';
        switch ($_GET['page']) {
        case 'home':
          $page = 'home.php';
          // no break
          case 'about':
          $page = 'about.php';

          break;
        case 'donate':
          $page = 'donate.php';

          break;
        case 'volunteer':
          $page = 'volunteer.php';

          break;
        default:
          $page = 'home.php';

          break;
      }

        include './pages/'.$page;
    }

  ?>
</div>