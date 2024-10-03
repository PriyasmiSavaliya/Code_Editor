<aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

    <ul class="list-reset flex flex-col">
        <a href="index.php"
                       class="font-sans no-underline">
        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
                            <i class="fas fa-tachometer-alt float-left mx-2"></i>
                            Dashboard
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </li>
                    </a>
                    <a href="users.php"
                       class="font-sans no-underline">
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                            <i class="fas fa-user-cog float-left mx-2"></i>
                            Users
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </li>
                    </a>
                    <a href="reg_user.php"
                       class="font-sans no-underline">
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                            <i class="fa fa-users float-left mx-2"></i>
                            Register Users
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </li>
                    </a>
                    <a href="lang.php"
                       class="font-sans no-underline">
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                            <i class="fas fa-grip-horizontal float-left mx-2"></i>
                            Language
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </li>
                    </a>
                    <a href="Practice.php"
                       class="font-sans no-underline">
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                            <i class="fas fa-book-open float-left mx-2"></i>
                            Practice Set
                            <span><i class="fa fa-angle-right float-right"></i></span>
                        </li>
                    </a>
                    <a href="tutorials.php"
                    class="font-sans no-underline">
                    <li class="w-full h-full py-3 px-2 border-b border-light-border">
                        <i class="fas fa-pencil-alt float-left mx-2"></i>
                        Tutorials
                        <span><i class="fa fa-angle-right float-right"></i></span>
                    </li>
                </a>
                <a href="contact.php"
                class="font-sans no-underline">
                <li class="w-full h-full py-3 px-2 border-b border-light-border">
                    <i class="fas fa-phone float-left mx-2"></i>
                    Contact Us
                    <span><i class="fa fa-angle-right float-right"></i></span>
                </li>
            </a>
            <a href="pay.php"
            class="font-sans no-underline">
            <li class="w-full h-full py-3 px-2 border-b border-light-border">
                <i class="far fa-credit-card float-left mx-2"></i>
                Subscribe User
                <span><i class="fa fa-angle-right float-right"></i></span>
            </li>
        </a>
            <!-- <a href="pages.php"
            class="font-sans no-underline">
            <li class="w-full h-full py-3 px-2 border-b border-light-border">
                <i class="fas fa-file float-left mx-2"></i>
                Pages
                <span><i class="fa fa-angle-right float-right"></i></span>
            </li>
        </a> -->
                </ul>

            </aside>
            <script>
var sidebar = document.getElementById('sidebar');

function sidebarToggle() {
    if (sidebar.style.display === "none") {
        sidebar.style.display = "block";
    } else {
        sidebar.style.display = "none";
    }
}
</script>