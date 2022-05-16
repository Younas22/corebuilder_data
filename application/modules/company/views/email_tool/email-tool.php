<?php  $user_type = $this->session->userdata('logged_in')->user_type; ?>
<div class="breadcome-area" style="display:none;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <form role="search" class="sr-input-func">
                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="<?=base_url()?>">Home</a> <span class="bread-slash">/</span>
                            </li>
                            <?php if ($user_type == 'company') { ?>
                            <li><span class="bread-blod"><?=$user_type?> / <?=$url_title?></span>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div style="margin-top:50px;"></div>
</div>
<!-- Single pro tab review Start-->

        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Email Compaigns</h4>
                            <div class="add-product">
                                <a href="add-department.html">Create an email compaign</a>
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>All (1)</th>
                                        <th>Sent (0)</th>
                                        <th>Drafts (1)</th>
                                        <th>Scheduled (0)</th>
                                        <th>Suspended (0)</th>
                                        <th>Running (0)</th>
                                        <th>Archived (0)</th>
                                    </tr>
                                    <tr>
                                        <td>Computer</td>
                                        <td>
                                            <button class="pd-setting">Active</button>
                                        </td>
                                        <td>John Alva</td>
                                        <td>admin@gmail.com</td>
                                        <td>01962067309</td>
                                        <td>1500</td>
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Mechanical</td>
                                        <td>
                                            <button class="ps-setting">Paused</button>
                                        </td>
                                        <td>John Alva</td>
                                        <td>admin@gmail.com</td>
                                        <td>01962067309</td>
                                        <td>1700</td>
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>MBA</td>
                                        <td>
                                            <button class="ds-setting">Disabled</button>
                                        </td>
                                        <td>John Alva</td>
                                        <td>admin@gmail.com</td>
                                        <td>01962067309</td>
                                        <td>1500</td>
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>BBA</td>
                                        <td>
                                            <button class="pd-setting">Active</button>
                                        </td>
                                        <td>John Alva</td>
                                        <td>admin@gmail.com</td>
                                        <td>01962067309</td>
                                        <td>1200</td>
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>CSE</td>
                                        <td>
                                            <button class="pd-setting">Active</button>
                                        </td>
                                        <td>John Alva</td>
                                        <td>admin@gmail.com</td>
                                        <td>01962067309</td>
                                        <td>1800</td>
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>MBA</td>
                                        <td>
                                            <button class="ps-setting">Paused</button>
                                        </td>
                                        <td>John Alva</td>
                                        <td>admin@gmail.com</td>
                                        <td>01962067309</td>
                                        <td>1000</td>
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="custom-pagination" style="margin-bottom: 80px;">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>