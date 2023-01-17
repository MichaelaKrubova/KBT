
        <nav class="topbar flex">

                <div class="brand">
                    <a href="#" class="logo-link" aria-label="Zpět na úvodní stranu">
                        <svg width="29" height="44" viewBox="0 0 29 44" fill="none">
                            <g clip-path="url(#clip0_5_609)">
                            <path d="M15.3458 1.31467L14.5 0L13.6542 1.31467C12.7467 2.726 4.78258 15.2407 4.78258 19.8819C4.78258 24.9098 9.14104 29 14.5 29C19.859 29 24.2174 24.9098 24.2174 19.8819C24.2174 15.2419 16.2533 2.72721 15.3458 1.31467ZM14.5 26.9881C10.2515 26.9881 6.79445 23.8005 6.79445 19.8819C6.79445 16.8055 11.7595 8.1635 14.5 3.74583C17.2405 8.1635 22.2055 16.8067 22.2055 19.8831C22.2055 23.8005 18.7485 26.9881 14.5 26.9881ZM20.4897 19.7176C20.4897 22.7964 17.8072 25.294 14.5 25.294C11.1928 25.294 8.51029 22.7964 8.51029 19.7176C8.51029 19.5206 8.53566 19.2983 8.58037 19.0542C8.58037 19.0542 10.1585 15.8932 14.4372 19.0542C18.061 21.7307 20.4184 19.0542 20.4184 19.0542C20.4643 19.2983 20.4897 19.5206 20.4897 19.7176Z" fill="#002256"/>
                            </g>
                            <path d="M4.14719 44V35.2727H5.99237V39.1207H6.10742L9.24805 35.2727H11.4597L8.22106 39.1804L11.498 44H9.29066L6.90004 40.4119L5.99237 41.5199V44H4.14719ZM12.4206 44V35.2727H15.915C16.557 35.2727 17.0925 35.3679 17.5215 35.5582C17.9505 35.7486 18.2729 36.0128 18.4888 36.3509C18.7047 36.6861 18.8127 37.0724 18.8127 37.5099C18.8127 37.8509 18.7445 38.1506 18.6081 38.4091C18.4718 38.6648 18.2843 38.875 18.0456 39.0398C17.8098 39.2017 17.54 39.3168 17.236 39.3849V39.4702C17.5684 39.4844 17.8794 39.5781 18.1692 39.7514C18.4618 39.9247 18.699 40.1676 18.8809 40.4801C19.0627 40.7898 19.1536 41.1591 19.1536 41.5881C19.1536 42.0511 19.0385 42.4645 18.8084 42.8281C18.5811 43.1889 18.2445 43.4744 17.7985 43.6847C17.3525 43.8949 16.8027 44 16.1493 44H12.4206ZM14.2658 42.4915H15.7701C16.2843 42.4915 16.6593 42.3935 16.8951 42.1974C17.1309 41.9986 17.2488 41.7344 17.2488 41.4048C17.2488 41.1634 17.1905 40.9503 17.074 40.7656C16.9576 40.581 16.7914 40.4361 16.5755 40.331C16.3624 40.2259 16.1081 40.1733 15.8127 40.1733H14.2658V42.4915ZM14.2658 38.9247H15.6337C15.8865 38.9247 16.111 38.8807 16.307 38.7926C16.5059 38.7017 16.6621 38.5739 16.7757 38.4091C16.8922 38.2443 16.9505 38.0469 16.9505 37.8168C16.9505 37.5014 16.8382 37.2472 16.6138 37.054C16.3922 36.8608 16.0769 36.7642 15.6678 36.7642H14.2658V38.9247ZM20.0218 36.794V35.2727H27.1895V36.794H24.5176V44H22.6937V36.794H20.0218Z" fill="#002256"/>
                            <defs>
                            <clipPath id="clip0_5_609">
                            <rect width="29" height="29" fill="#002256"/>
                            </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
            

            <button class="mobile-nav-toggle "  aria-label="otevřít navigační menu" aria-controls="nav-menu" aria-expanded="false">
                <i id="toggleBtn" class="fa-solid fa-bars-staggered fa-2x menu-icon"></i>
                <i class="fa-solid fa-xmark fa-2x close-icon"></i>
            </button>
            

            <ul class="nav-menu flex uppercase" id="nav-menu" role="menu" data-visible = "false">
                <li role="none"><a href="../index.php" class="no-underline" role="položka menu">Domů</a></li>
                <li role="none"  id="dropdown" ></lirole><a href="#" class="no-underline" id="dropdown-link" role="položka menu">Služby <iconify-icon icon="codicon:triangle-right" class="triangle-icon"></iconify-icon>
                </a>
                    <ul class="dropdown" >
                        <li role="none"><a href="/" class="no-underline" role="položka menu">Vodoměry</a></li>
                        <li role="none"><a href="#" class="no-underline" role="položka menu">Průtokoměry</a></li>
            <li role="none"><a href="#" class="no-underline" role="položka menu">IRTN</a></li>
                        <li role="none"><a href="#" class="no-underline" role="položka menu">Ostatní</a></li>
                    </ul>
                </li>
                <li role="none"><a href="<?php echo $ROOT; ?>pages/about.php" class="no-underline" role="položka menu">O nás</a></li>
                <li role="none"><a href="/" class="no-underline" role="položka menu">Kontakt</a></li>
            </ul>
                
        </nav>