@if (Auth::check())
    <header>
        <div class="ui container">
            <div class="logo">
                <a href="/">
                    <img src="/images/logo.png" alt="FII Practic Logo" />
                </a>
            </div>
            <ul class="links">
                <li><a href="/trainings"><i class="icon calendar"></i>Program</a></li><li><a href="/arii-de-studiu"><i class="icon cloud"></i>Arii de studiu</a></li><li><a href="/contact"><i class="icon text telephone"></i>Contact</a></li>
            </ul>
            <div class="settings">
                <a href="/panou-de-administrare"><div class="ui teal button">
                    <i class="icon setting"></i>
                    Setari Cont
                </div></a>
                <a href="/logout"><div class="ui teal basic button">
                    <i class="icon power"></i>
                    Logout
                </div></a>
            </div>
            <div class="responsive-menu">
                <div class="ui text menu">
                    <div class="ui right dropdown item">
                        <button class="ui icon large teal button"><i class="icon sidebar"></i></button>
                        <div class="menu">
                            <a href="/trainings" class="teal item">
                                Program
                            </a>
                            <a href="/arii-de-studiu" class="item active">
                                Arii de studiu
                            </a>
                            <a href="/contact" class="item">
                                Contact
                            </a>
                            <a href="/panou-de-administrare" class="item">
                                <i class="icon setting"></i>
                                Setari cont
                            </a>
                            <a href="/request/logout" class="item">
                                <i class="icon power"></i>
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfloat"></div>
        </div>
    </header>
@else
    <header>
    <div class="ui container">
        <div class="logo">
            <a href="/">
                <img src="/images/logo.png" alt="FII Practic Logo" />
            </a>
        </div>
        <ul class="links">
            <li><a href="/trainings"><i class="icon calendar"></i>Program</a></li><li><a href="/arii-de-studiu"><i class="icon cloud"></i>Arii de studiu</a></li><li><a href="/contact"><i class="icon text telephone"></i>Contact</a></li>
        </ul>
        <div class="logRegister">
            <a href="/cont#login"><button class="ui teal basic button"><i class="icon puzzle"></i> Conecteaza-te</button></a>
            <a href="/cont#register"><button class="ui teal button"><i class="icon student"></i> Inscrie-te</button></a>
        </div>
        <div class="responsive-menu">
            <div class="ui text menu">
                <div class="ui right dropdown item">
                    <button class="ui icon large teal button"><i class="icon sidebar"></i></button>
                    <div class="menu">
                        <a href="/trainings" class="teal item">
                            Program
                        </a>
                        <a href="/arii-de-studiu" class="item active">
                            Arii de studiu
                        </a>
                        <a href="/contact" class="item">
                            Contact
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfloat"></div>
    </div>
</header>
@endif