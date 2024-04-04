<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DTR</title>
    
     <!-- ====== CSS ====== -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/sidebar.css') }}">

     <!-- ====== Bootstrap ====== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- ====== Boxicons ====== -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

  <div class="sidebar close" id="sidebar">
    <ul class="nav-links">
        <li id="menuu">
            <i class='bx bx-menu' id="menu-box" style="font-size: 30px"></i>
        </li>
        <li class="active">
            <a href="{{ route('dashboard') }}">
                <i class='bx bx-grid-alt'></i>
                <span class="link_name">Dashboard</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Dashboard</a></li>
            </ul>
        </li>
        <li>
            <div class="icon-link">
                <a href="#" onclick="openSidebar()">
                    <i class='bx bxs-edit'></i>
                    <span class="link_name">Data Entry</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu" style="font-weight: bold">
                <li><a class="link_name" href="#">Data Entry</a></li>
                <li><a href="#">SUB LINK</a></li>
                <li><a href="#">SUB LINK</a></li>
                <li><a href="#">SUB LINK</a></li>
            </ul>
        </li>
        <li>
            <div class="icon-link">
                <a href="#" onclick="openSidebar()">
                    <i class='bx bxs-edit'></i>
                    <span class="link_name">Data Entry</span>
                </a>
                <i class='bx bxs-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu" style="font-weight: bold">
                <li><a class="link_name" href="#">Data Entry</a></li>
                <li><a href="#">SUB LINK</a></li>
                <li><a href="#">SUB LINK</a></li>
                <li><a href="#">SUB LINK</a></li>
            </ul>
        </li>
        <li onclick="document.getElementById('signout').submit()">
            <a href="#">
                <i class='bx bx-log-out'></i>
                <span class="link_name">Logout</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="#">Logout</a></li>
            </ul>
            <form action="{{ route('sign-out') }}" method="POST" id="signout">
                @csrf
            </form>
        </li>
        <li>
            <div class="profile-details">
                <div></div>
                <div class="name-job">
                    <div class="profile_name">Juan Dela Cruz</div>
                    <div class="job">Developer</div>
                </div>
            </div>
        </li>
    </ul>
</div>

<script>
    function openSidebar() {
        let sidebar = document.getElementById('sidebar')

        if (sidebar.classList.contains('close')) {
            document.getElementById('menu-box').click()
        }
    }

    let arrow = document.querySelectorAll(".arrow");
    let notificationTable = null;

    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
            let arrowParent = e.target.parentElement.parentElement; // Selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
        });

        // Add event listener to parent element
        let parentElement = arrow[i].parentElement.parentElement;
        parentElement.addEventListener("click", (e) => {
            if (!e.target.classList.contains('arrow')) { // Check if the click didn't happen on the arrow
                parentElement.classList.toggle("showMenu");
            }
        });
    }

    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector("#menu-box");
    sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });

    var session = "{{ auth()->check() ? 'true' : 'false' }}"
    if (!session)
        window.location.replace("{{ route('sign-in.index') }}")

    var mediaQuery = window.matchMedia('(max-width: 600px)');

    function handleMediaQueryChange(mediaQuery) {
        var nameElement = document.getElementById('name-span-header');

        if (mediaQuery.matches) {
            // Change h2 to h6
            if (nameElement && nameElement.tagName.toLowerCase() === 'h2') {
                var h6Element = document.createElement('h6');
                h6Element.id = 'name-span-header';
                h6Element.innerHTML = nameElement.innerHTML;
                nameElement.parentNode.replaceChild(h6Element, nameElement);
            }
        } else {
            // Change h6 to h2
            if (nameElement && nameElement.tagName.toLowerCase() === 'h6') {
                var h2Element = document.createElement('h2');
                h2Element.id = 'name-span-header';
                h2Element.innerHTML = nameElement.innerHTML;
                nameElement.parentNode.replaceChild(h2Element, nameElement);
            }
        }
    }

    mediaQuery.addEventListener('change', function() {
        handleMediaQueryChange(mediaQuery);
    });

    handleMediaQueryChange(mediaQuery);
</script>


</body>
<footer class="mt-5"> </footer>
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="{{ asset('js/showPassword.js') }}"></script>
        <script src="{{ asset('js/validations.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        

