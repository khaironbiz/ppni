<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
    <div class="nano">
        <div class="nano-content">
            <div class="logo"><a href="index.html">
                    <!-- <img src="assets/images/logo.png" alt="" /> --><span>HPII-PPNI</span></a></div>

            <ul>

                <?php
                $role_id = $this->session->userdata('role_id');
                $queryMenu = "SELECT `user_menu`.`id`, `menu`
                            FROM `user_menu` JOIN `user_access_menu`
                              ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                           WHERE `user_access_menu`.`role_id` = $role_id
                        ORDER BY `user_access_menu`.`menu_id` ASC
                        ";
                $menu = $this->db->query($queryMenu)->result_array();
                ?>
                <!-- LOOPING MENU -->
                <?php foreach ($menu as $m) : ?>
                    <li class="label"><?= $m['menu']; ?></li>

                    <!-- SIAPKAN SUB-MENU SESUAI MENU -->
                    <?php
                    $menuId = $m['id'];
                    $querySubMenu = "SELECT *
                               FROM `user_sub_menu` JOIN `user_menu` 
                                 ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                              WHERE `user_sub_menu`.`menu_id` = $menuId
                                AND `user_sub_menu`.`is_active` = 1
                        ";
                    $subMenu = $this->db->query($querySubMenu)->result_array();
                    ?>

                    <?php foreach ($subMenu as $sm) : ?>
                        <?php if ($title == $sm['title']) : ?>
                            <li class="active">
                            <?php else : ?>
                            <li>
                            <?php endif; ?>
                            <a href="<?= base_url($sm['url']); ?>"><i class="<?= $sm['icon']; ?>"></i> <?= $sm['title']; ?> </a>
                            </li>
                        <?php endforeach; ?>

                        <hr class="sidebar-divider mt-3">

                    <?php endforeach; ?>

                    <li><a href="<?= base_url('auth/logout'); ?>"><i class="ti-close"></i> Logout </a></li>



            </ul>
        </div>
    </div>
</div>
<!-- /# sidebar -->