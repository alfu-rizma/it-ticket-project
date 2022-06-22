<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/onsenui/css/onsenui.css">
    <link rel="stylesheet" href="assets/onsenui/css/onsen-css-components.min.css">
    <script src="assets/onsenui/js/onsenui.min.js"></script>
</head>

<body>
    <ons-navigator id="appNavigator" swipeable swipe-target-width="80px">
        <ons-page>
            <ons-splitter id="appSplitter">
                <ons-splitter-side id="sidemenu" page="sidemenu.html" swipeable side="right" collapse="" width="260px">
                </ons-splitter-side>
                <ons-splitter-content page="tabbar.html"></ons-splitter-content>
            </ons-splitter>
        </ons-page>
    </ons-navigator>

    <template id="tabbar.html">
        <ons-page id="tabbar-page">
            <ons-toolbar>
                <div class="center">Home</div>
                <div class="right">
                    <ons-toolbar-button onclick="fn.toggleMenu()">
                        <ons-icon icon="ion-ios-menu, material:md-menu"></ons-icon>
                    </ons-toolbar-button>
                </div>
            </ons-toolbar>
            <ons-tabbar swipeable id="appTabbar" position="auto">
                <ons-tab label="Home" icon="ion-ios-home" page="home.html" active></ons-tab>
                <ons-tab label="View" icon="ion-ios-create" page="forms.html"></ons-tab>

            </ons-tabbar>

            <script>
            ons.getScriptPage().addEventListener('prechange', function(event) {
                if (event.target.matches('#appTabbar')) {
                    event.currentTarget.querySelector('ons-toolbar .center').innerHTML = event.tabItem
                        .getAttribute('label');
                }
            });
            </script>
        </ons-page>
    </template>

    <template id="sidemenu.html">
        <ons-page>
            <div class="profile-pic">
                <img src="https://monaca.io/img/logos/download_image_onsenui_01.png">
            </div>

            <ons-list-title>Access</ons-list-title>
            <ons-list>
                <ons-list-item onclick="fn.loadView(0)">
                    <div class="left">
                        <ons-icon fixed-width class="list-item__icon" icon="ion-ios-home, material:md-home"></ons-icon>
                    </div>
                    <div class="center">
                        Home
                    </div>
                    <div class="right">
                        <ons-icon icon="fa-link"></ons-icon>
                    </div>
                </ons-list-item>
                <ons-list-item onclick="fn.loadView(1)">
                    <div class="left">
                        <ons-icon fixed-width class="list-item__icon" icon="ion-ios-create, material:md-edit">
                        </ons-icon>
                    </div>
                    <div class="center">
                        View
                    </div>
                    <div class="right">
                        <ons-icon icon="fa-link"></ons-icon>
                    </div>
                </ons-list-item>

            </ons-list>
            <ons-list-title style="margin-top: 10px">Links</ons-list-title>
            <ons-list>
                <ons-list-item onclick="fn.loadLink('<?php echo base_url();?>kerusakan/login')">
                    <div class="left">
                        <ons-icon fixed-width class="list-item__icon" icon="ion-ios-document"></ons-icon>
                    </div>
                    <div class="center">
                        Admin Page
                    </div>
                    <div class="right">
                        <ons-icon icon="fa-external-link"></ons-icon>
                    </div>
                </ons-list-item>

            </ons-list>

            <script>
            ons.getScriptPage().onInit = function() {
                // Set ons-splitter-side animation
                this.parentElement.setAttribute('animation', ons.platform.isAndroid() ? 'overlay' : 'reveal');
            };
            </script>

            <style>
            .profile-pic {
                width: 200px;
                background-color: #fff;
                margin: 20px auto 10px;
                border: 1px solid #999;
                border-radius: 4px;
            }

            .profile-pic>img {
                display: block;
                max-width: 100%;
            }

            ons-list-item {
                color: #444;
            }
            </style>
        </ons-page>
    </template>

    <template id="home.html">
        <ons-page>
            <p class="intro">
                ISI FORM UNTUK UPDATE TIKET IT<br><br>
            </p>
            <ons-list>
                <ons-list-header>Isikan nama bapak / ibu</ons-list-header>
                <form method="POST" action="<?php echo base_url();?>kerusakan/simpandata" enctype="multipart/form-data">
                    <ons-list-item class="input-items">
                        <div class="left">
                            <ons-icon icon="md-face" class="list-item__icon"></ons-icon>
                        </div>
                        <label class="center">
                            <ons-input id="name-input" float maxlength="20" placeholder="Name" name="name"></ons-input>
                        </label>
                    </ons-list-item>
                    <ons-list-header>Pilih Perangkat yang Rusak</ons-list-header>
                    <ons-list-item tappable>
                        <label class="left">
                            <ons-radio class="radio-fruit" input-id="radio-0" value="Laptop" name="perangkat">
                            </ons-radio>
                        </label>
                        <label for="radio-0" class="center">Laptop</label>
                    </ons-list-item>
                    <ons-list-item tappable>
                        <label class="left">
                            <ons-radio class="radio-fruit" input-id="radio-1" value="Komputer" name="perangkat" checked>
                            </ons-radio>
                        </label>
                        <label for="radio-1" class="center">Komputer</label>
                    </ons-list-item>
                    <ons-list-item tappable modifier="longdivider">
                        <label class="left">
                            <ons-radio class="radio-fruit" input-id="radio-2" value="Printer" name="perangkat">
                            </ons-radio>
                        </label>
                        <label for="radio-2" class="center">Printer</label>
                    </ons-list-item>
                    <ons-list-item tappable modifier="longdivider">
                        <label class="left">
                            <ons-radio class="radio-fruit" input-id="radio-3" value="Wifi" name="perangkat"></ons-radio>
                        </label>
                        <label for="radio-3" class="center">Wifi</label>
                    </ons-list-item>
                    <ons-list-item tappable modifier="longdivider">
                        <label class="left">
                            <ons-radio class="radio-fruit" input-id="radio-4" value="CCTV" name="perangkat"></ons-radio>
                        </label>
                        <label for="radio-4" class="center">CCTV</label>
                    </ons-list-item>
                    <ons-list-item>
                        <div id="fruit-love" class="right right-label">
                            Jadi yang mana yang rusak (•ิ_•ิ)?
                            <ons-icon icon="fa-hand-spock-o" size="lg" class="right-icon"></ons-icon>
                        </div>

                    </ons-list-item>

                    <ons-list-header>Deskripsi Kerusakan</ons-list-header>
                    <ons-list-item tappable>
                        <textarea class="textarea" rows="9" placeholder="Deskripsi Kerusakan" name="deskripsi"
                            style="width:98%;"></textarea>
                    </ons-list-item>

                    <section style="margin: 16px">
                        <button class="glow-on-hover" type="submit">KIRIM</button>

                    </section>
                </form>

            </ons-list>



            <script>
            ons.getScriptPage().onInit = function() {
                if (ons.platform.isAndroid()) {
                    const inputItems = document.querySelectorAll('.input-items');
                    for (i = 0; i < inputItems.length; i++) {
                        inputItems[i].hasAttribute('modifier') ?
                            inputItems[i].setAttribute('modifier', inputItems[i].getAttribute('modifier') +
                                ' nodivider') :
                            inputItems[i].setAttribute('modifier', 'nodivider');
                    }
                }

                var currentFruitId = 'radio-1';
                const radios = document.querySelectorAll('.radio-fruit')
                for (var i = 0; i < radios.length; i++) {
                    var radio = radios[i];
                    radio.addEventListener('change', function(event) {
                        if (event.target.id !== currentFruitId) {
                            document.getElementById('fruit-love').innerHTML =
                                `Ok Kerusakan pada ${event.target.value} ya ^^`;
                            document.getElementById(currentFruitId).checked = false;
                            currentFruitId = event.target.id;
                        }
                    })
                }
                var currentColors = [];
                const checkboxes = document.querySelectorAll('.checkbox-color')
                for (var i = 0; i < checkboxes.length; i++) {
                    var checkbox = checkboxes[i];
                    checkbox.addEventListener('change', function(event) {
                        if (!currentColors.includes(event.target.value)) {
                            currentColors.push(event.target.value);
                        } else {
                            var index = currentColors.indexOf(event.target.value);
                            currentColors.splice(index, 1);
                        }
                        document.getElementById('checkboxes-header').innerHTML = currentColors;
                    })
                }

            }
            </script>
            <style>
            .right-icon {
                margin-left: 10px;
            }

            .right-label {
                color: #666;
            }

            .intro {
                text-align: center;
                padding: 0 20px;
                margin-top: 40px;
            }

            ons-card {
                cursor: pointer;
                color: #333;
            }

            .card__title,
            .card--material__title {
                font-size: 20px;
            }
            </style>
            <style>
            #lorem-dialog .dialog-container {
                height: 200px;
            }

            ons-list-title {
                margin-top: 20px;
            }
            </style>



        </ons-page>
    </template>


    <template id="forms.html">
        <ons-page id="forms-page">
            <?php if ($this->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('success');?>
            </div>
            <?php endif;?>
            <?php if ($this->session->flashdata('delete')): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $this->session->flashdata('delete');?>
            </div>
            <?php endif;?>

            <?php $no=1;
                foreach ($kerusakan as $datakerusakan): ?>
            <ons-card onclick="fn.pushPage({'id':', 'title': 'PullHook'})">
                <div class="title"><?php echo $datakerusakan->name;?></div>
                <div class="content">Perangkat : <?php echo $datakerusakan->perangkat;?></div>
                <div class="content">Deskripsi : <?php echo $datakerusakan->deskripsi;?></div>
                <div class="content">Proses : <?php echo $datakerusakan->proses;?></div>
            </ons-card>

            <?php endforeach;?>


            <style>
            .intro {
                text-align: center;
                padding: 0 20px;
                margin-top: 40px;
            }

            ons-card {
                cursor: pointer;
                color: #333;
            }

            .card__title,
            .card--material__title {
                font-size: 20px;
                color: #FFA101;
                
            }
            
            </style>
            <script>
            $(document).ready(function() {
                $('#dataTable').DataTable();
            });
            </script>
        </ons-page>
    </template>


    <style>
    ons-splitter-side[animation=overlay] {
        border-left: 1px solid #bbb;
    }
    </style>

    <script>
    window.fn = {};

    window.fn.toggleMenu = function() {
        document.getElementById('appSplitter').right.toggle();
    };

    window.fn.loadView = function(index) {
        document.getElementById('appTabbar').setActiveTab(index);
        document.getElementById('sidemenu').close();
    };

    window.fn.loadLink = function(url) {
        window.open(url, '_blank');
    };

    window.fn.pushPage = function(page, anim) {
        if (anim) {
            document.getElementById('appNavigator').pushPage(page.id, {
                data: {
                    title: page.title
                },
                animation: anim
            });
        } else {
            document.getElementById('appNavigator').pushPage(page.id, {
                data: {
                    title: page.title
                }
            });
        }
    };
    </script>

    <style>
    .glow-on-hover {
        width: 100%;
        height: 50px;
        border: none;
        outline: none;
        color: #fff;
        background: #111;
        cursor: pointer;
        position: relative;
        z-index: 0;
        border-radius: 10px;
    }

    .glow-on-hover:before {
        content: '';
        background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
        position: absolute;
        top: -2px;
        left: -2px;
        background-size: 400%;
        z-index: -1;
        filter: blur(5px);
        width: calc(100% + 4px);
        height: calc(100% + 4px);
        animation: glowing 20s linear infinite;
        opacity: 0;
        transition: opacity .3s ease-in-out;
        border-radius: 10px;
    }

    .glow-on-hover:active {
        color: #000
    }

    .glow-on-hover:active:after {
        background: transparent;
    }

    .glow-on-hover:hover:before {
        opacity: 1;
    }

    .glow-on-hover:after {
        z-index: -1;
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background: #111;
        left: 0;
        top: 0;
        border-radius: 10px;
    }

    @keyframes glowing {
        0% {
            background-position: 0 0;
        }

        50% {
            background-position: 400% 0;
        }

        100% {
            background-position: 0 0;
        }
    }
    </style>
</body>

</html>