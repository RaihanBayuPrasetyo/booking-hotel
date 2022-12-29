        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Hotel Book</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Query Menu -->

            <?php
            $role_id = $this->session->userdata('role_id');
            $queryMenu = "SELECT `user_menu`.`id`,  `menu`
                                FROM `user_menu`
                                JOIN `user_access_menu` ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                               WHERE `user_access_menu`.`role_id` = $role_id
                               ORDER BY `user_access_menu`.`menu_id` ASC
                            ";
            $menu = $this->db->query($queryMenu)->result_array();
            ?>

            <!-- Looping menu -->
            <?php foreach ($menu as $m) : ?>
                <div class="sidebar-heading"><?= $m['menu']; ?></div>

                <!-- SUB MENU -->
                <?php
                $menuId = $m['id'];
                $querySubMenu = "SELECT *
                                FROM `user_sub_menu`
                                JOIN `user_menu` ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                WHERE `user_sub_menu`.`menu_id` = $menuId AND `user_sub_menu`.`is_active` = 1 AND  `user_sub_menu`.`menu_id` = 1
                            ";
                $subMenu = $this->db->query($querySubMenu)->result_array();
                ?>
                <?php foreach ($subMenu as $sm) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                            <i class="<?= $sm['icon']; ?>"></i>
                            <span><?= $sm['title']; ?></span></a>
                    </li>
                <?php endforeach ?>

            <?php endforeach; ?>

            <!-- Looping 2 -->
            <?php foreach ($menu as $m) : ?>
                <!-- SUB MENU -->
                <?php
                $menuId = $m['id'];
                $querySubMenu = "SELECT *
                                FROM `user_sub_menu`
                                JOIN `user_menu` ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                WHERE `user_sub_menu`.`menu_id` = $menuId AND `user_sub_menu`.`is_active` = 1 AND  `user_sub_menu`.`menu_id` = 2
                            ";
                $subMenu = $this->db->query($querySubMenu)->result_array();
                ?>
                <?php foreach ($subMenu as $sm) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                            <i class="<?= $sm['icon']; ?>"></i>
                            <span><?= $sm['title']; ?></span></a>
                    </li>
                <?php endforeach ?>

            <?php endforeach; ?>

            <!-- Looping 3 -->
            <?php foreach ($menu as $m) : ?>
                <!-- SUB MENU -->
                <?php
                $menuId = $m['id'];
                $querySubMenu = "SELECT *
                                FROM `user_sub_menu`
                                JOIN `user_menu` ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                WHERE `user_sub_menu`.`menu_id` = $menuId AND `user_sub_menu`.`is_active` = 1 AND  `user_sub_menu`.`menu_id` = 3
                            ";
                $subMenu = $this->db->query($querySubMenu)->result_array();
                ?>
                <?php foreach ($subMenu as $sm) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                            <i class="<?= $sm['icon']; ?>"></i>
                            <span><?= $sm['title']; ?></span></a>
                    </li>
                <?php endforeach ?>

            <?php endforeach; ?>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->