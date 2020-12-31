<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>FrontendFunn - Semantic UI - Sample Admin Dashboard Template</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha256-9mbkOfVho3ZPXfM7W8sV2SndrGDuh7wuyLjtsWeTI1Q=" crossorigin="anonymous" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
  
  <link rel="stylesheet" href="css/index.css" />
  
</head>

<body>
  <!-- sidebar -->  

  <!-- sidebar -->
  <!-- top nav -->

  <nav class="ui top fixed inverted menu">
    <div class="left menu">
      <a href="#" class="sidebar-menu-toggler item" data-target="#sidebar">
        <i class="sidebar icon"></i>
      </a>
      <a href="#" class="header item">
        Semantic UI
      </a>
    </div>

    <div class="right menu">
      <a href="#" class="item">
        <i class="bell icon"></i>
      </a>
      <div class="ui dropdown item">
        <i class="user cirlce icon"></i>
        <div class="menu">
          <a href="modulos/01-login.php" class="item">
            <i class="info circle icon"></i>Ingresar</a>
          <a href="#" class="item">
            <i class="wrench icon"></i>
            Settings</a>
          <a href="#" class="item">
            <i class="sign-out icon"></i>
            Logout
          </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- top nav -->

  <div class="pusher">
      <div class="main-content">
        <div class="ui grid stackable padded">
          <div
            class="four wide computer eight wide tablet sixteen wide mobile column"
          >
            <div class="ui fluid card">
              <div class="content">
                <div class="ui right floated header red">
                  <i class="icon shopping cart"></i>
                </div>
                <div class="header">
                  <div class="ui red header">
                    3958
                  </div>
                </div>
                <div class="meta">
                  orders
                </div>
                <div class="description">
                  Elliot requested permission to view your contact details
                </div>
              </div>
              <div class="extra content">
                <div class="ui two buttons">
                  <div class="ui red button">More Info</div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="four wide computer eight wide tablet sixteen wide mobile column"
          >
            <div class="ui fluid card">
              <div class="content">
                <div class="ui right floated header green">
                  <i class="icon clock"></i>
                </div>
                <div class="header">
                  <div class="ui header green">57.6%</div>
                </div>
                <div class="meta">
                  Time
                </div>
                <div class="description">
                  Elliot requested permission to view your contact details
                </div>
              </div>
              <div class="extra content">
                <div class="ui two buttons">
                  <div class="ui green button">More Info</div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="four wide computer eight wide tablet sixteen wide mobile column"
          >
            <div class="ui fluid card">
              <div class="content">
                <div class="ui right floated header teal">
                  <i class="icon briefcase"></i>
                </div>
                <div class="header">
                  <div class="ui teal header">3112</div>
                </div>
                <div class="meta">
                  Saves
                </div>
                <div class="description">
                  Elliot requested permission to view your contact details
                </div>
              </div>
              <div class="extra content">
                <div class="ui two buttons">
                  <div class="ui teal button">More Info</div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="four wide computer eight wide tablet sixteen wide mobile column"
          >
            <div class="ui fluid card">
              <div class="content">
                <div class="ui right floated header purple">
                  <i class="icon trophy"></i>
                </div>
                <div class="header">
                  <div class="ui purple header">9805</div>
                </div>
                <div class="meta">
                  Views
                </div>
                <div class="description">
                  Elliot requested permission to view your contact details
                </div>
              </div>
              <div class="extra content">
                <div class="ui two buttons">
                  <div class="ui purple button">More Info</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!--  
      <div class="ui grid stackable padded">
        <div class="column">
          <div class="page-login">
            <div class="ui centered grid container">
              <div class="nine wide column">
                <div class="ui icon warning message">
                  <i class="lock icon"></i>
                  <div class="content">
                    <div class="header">
                      Login failed!
                    </div>
                    <p>You might have misspelled your username or password!</p>
                  </div>
                </div>
                <div class="ui fluid card">
                  <div class="content">
                    <form class="ui form" method="POST">
                      <div class="field">
                        <label>User</label>
                        <input type="text" name="user" placeholder="User">
                      </div>
                      <div class="field">
                        <label>Password</label>
                        <input type="password" name="pass" placeholder="Password">
                      </div>
                      <button class="ui primary labeled icon button" type="submit">
                        <i class="unlock alternate icon"></i>
                        Login
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="ui grid stackable padded">
        <div class="four wide computer eight wide tablet sixteen wide mobile  center aligned column">
          <div class="ui teal statistic">
            <div class="value">
              5,550
            </div>
            <div class="label">
              Downloads
            </div>
          </div>
        </div>
        <div class="four wide computer eight wide tablet sixteen wide mobile  center aligned column">
          <div class="ui purple statistic">
            <div class="value">
              50+
            </div>
            <div class="label">
              Developers
            </div>
          </div>
        </div>
        <div class="four wide computer eight wide tablet sixteen wide mobile  center aligned column">
          <div class="ui green statistic">
            <div class="value">
              800+
            </div>
            <div class="label">
              Commits
            </div>
          </div>
        </div>
        <div class="four wide computer eight wide tablet sixteen wide mobile  center aligned column">
          <div class="ui purple statistic">
            <div class="value">
              1000+
            </div>
            <div class="label">
              Cups of Coffee
            </div>
          </div>
        </div>
      </div>
      -->
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha256-t8GepnyPmw9t+foMh3mKNvcorqNHamSKtKRxxpUEgFI=" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>

</html>