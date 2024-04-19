<div class="navbar-header">
    <div class="d-flex align-items-left">
        <button type="button" class="btn btn-sm mr-2 d-lg-none px-3 font-size-16 header-item waves-effect"
            id="vertical-menu-btn">
            <i class="fa fa-fw fa-bars"></i>
        </button>
    </div>

    <div class="d-flex align-items-center">
        <div class="dropdown d-inline-block ml-2">
            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img class="rounded-circle header-profile-user" src="<?=base_url()?>assets/images/user.png"
                    alt="Header Avatar">
                <span class="d-none d-sm-inline-block ml-1"><?=user()->fullname?></span>
                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
                <a target="_blank" href="<?=base_url('pedoman_penggunaan.pdf')?>"
                    class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span>Pedoman Penggunaan</span>
                </a>
                <a href="<?=base_url('logout')?>"
                    class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                    <span>Log Out</span>
                </a>
            </div>
        </div>

    </div>
</div>