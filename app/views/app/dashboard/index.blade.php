@extends('app.layout.master')
@section('title')
    Dashboard - Churna Management System
@stop

@section('page-toolbar-title')
    Dashboard
@stop

@section('page-toolbar-subtitle')
    Contains brief summary of the whole system
@stop

@section('content')
    <!-- Your content -->
    <div class="row">
        <div class="col-md-12">
            <div class="q-buttons">
                <a href="pages-mailbox-inbox.html" class="q-button">
                    <div class="q-button-icon">
                        <i class="fa fa-briefcase"></i>
                    </div>
                    <div class="q-button-text">CLIENTS</div>
                </a>
                <a href="maps-google.html" class="q-button">
                    <div class="q-button-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="q-button-text">USERS</div>
                </a>
                <a href="charts.html" class="q-button">
                    <div class="q-button-icon">
                        <i class="fa fa-bar-chart-o"></i>
                    </div>
                    <div class="q-button-text">REPORTS</div>
                </a>
                <a href="form-elements.html" class="q-button">
                    <div class="q-button-icon">
                        <i class="fa fa-files-o"></i>
                    </div>
                    <div class="q-button-text">WEBSITES</div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="block">
                <div class="block-head" style="border-bottom: 0px;">
                    <h2>RECENTLY UPLOADED DEMO SITES</h2>
                    <div class="block-head-form">
                        <button class="btn btn-primary"><i class="fa fa-eye"></i> View All</button>
                    </div>
                </div>
                <div class="block-content np">
                    <table class="table table-bordered table-condensed">
                        <thead>
                            <tr class="info">
                                <th>Website Name</th>
                                <th>URL</th>
                                <th>Client Name</th>
                                <th>Expiration Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Website # 1</td>
                                <td><a href="#">http://sample.dev/site/sAx135</a></td>
                                <td><a href="#">Nico Penaredondo</a></td>
                                <td>{{ date('Y-m-d H:i:s A') }}</td>
                                <td><span class="label label-default">ACTIVE</span></td>
                                <td><a class="btn btn-block btn-default"><i class="fa fa-eye"></i> View Site</a></td>
                            </tr>
                            <tr>
                                <td>Website # 1</td>
                                <td><a href="#">http://sample.dev/site/sAx135</a></td>
                                <td><a href="#">Nico Penaredondo</a></td>
                                <td>{{ date('Y-m-d H:i:s A') }}</td>
                                <td><span class="label label-success">SUCCESS</span></td>
                                <td><a class="btn btn-block btn-default"><i class="fa fa-eye"></i> View Site</a></td>
                            </tr>
                            <tr>
                                <td>Website # 1</td>
                                <td><a href="#">http://sample.dev/site/sAx135</a></td>
                                <td><a href="#">Nico Penaredondo</a></td>
                                <td>{{ date('Y-m-d H:i:s A') }}</td>
                                <td><span class="label label-danger">EXPIRED</span></td>
                                <td><a class="btn btn-block btn-default"><i class="fa fa-eye"></i> View Site</a></td>
                            </tr>
                            <tr>
                                <td>Website # 1</td>
                                <td><a href="#">http://sample.dev/site/sAx135</a></td>
                                <td><a href="#">Nico Penaredondo</a></td>
                                <td>{{ date('Y-m-d H:i:s A') }}</td>
                                <td><span class="label label-danger">EXPIRED</span></td>
                                <td><a class="btn btn-block btn-default"><i class="fa fa-eye"></i> View Site</a></td>
                            </tr>
                            <tr>
                                <td>Website # 1</td>
                                <td><a href="#">http://sample.dev/site/sAx135</a></td>
                                <td><a href="#">Nico Penaredondo</a></td>
                                <td>{{ date('Y-m-d H:i:s A') }}</td>
                                <td><span class="label label-danger">EXPIRED</span></td>
                                <td><a class="btn btn-block btn-default"><i class="fa fa-eye"></i> View Site</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="block">
                <div class="block-head" style="border-bottom: 0px;">
                    <h2>TOP CONTRIBUTOR</h2>
                    <div class="block-head-form">
                        <button class="btn btn-primary"><i class="fa fa-eye"></i> View All</button>
                    </div>
                </div>
                <div class="block-content np">
                    <table class="table table-bordered table-condensed">
                        <thead>
                            <tr class="info">
                                <th>#</th>
                                <th>Username</th>
                                <th>Uploaded Sites</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>michael.yap</td>
                                <td><span class="badge badge-info">20 Websites</span></td>
                                <td><a class="btn btn-block btn-default"><i class="fa fa-eye"></i> View User</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>mim.cabrera</td>
                                <td><span class="badge badge-info">18 Websites</span></td>
                                <td><a class="btn btn-block btn-default"><i class="fa fa-eye"></i> View User</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>nico.penaredondo</td>
                                <td><span class="badge badge-info">14 Websites</span></td>
                                <td><a class="btn btn-block btn-default"><i class="fa fa-eye"></i> View User</a></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>michael.rafallo</td>
                                <td><span class="badge badge-info">10 Websites</span></td>
                                <td><a class="btn btn-block btn-default"><i class="fa fa-eye"></i> View User</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>edsel.pingol</td>
                                <td><span class="badge badge-info">5 Websites</span></td>
                                <td><a class="btn btn-block btn-default"><i class="fa fa-eye"></i> View User</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="block">
                <div class="block-head" style="border-bottom: 0px;">
                    <h2>Recently Added Clients</h2>
                    <div class="block-head-form">
                        <button class="btn btn-primary"><i class="fa fa-eye"></i> View All</button>
                    </div>
                </div>
                <div class="block-content np">
                    <table class="table table-bordered table-condensed">
                        <thead>
                            <tr class="info">
                                <th>Client Name</th>
                                <th>Added By</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>michael.yap</td>
                                <td><span class="badge badge-info">20 Websites</span></td>
                                <td><a class="btn btn-block btn-default"><i class="fa fa-eye"></i> View Clients</a></td>
                            </tr>
                            <tr>
                                <td>mim.cabrera</td>
                                <td><span class="badge badge-info">18 Websites</span></td>
                                <td><a class="btn btn-block btn-default"><i class="fa fa-eye"></i> View Clients</a></td>
                            </tr>
                            <tr>
                                <td>nico.penaredondo</td>
                                <td><span class="badge badge-info">14 Websites</span></td>
                                <td><a class="btn btn-block btn-default"><i class="fa fa-eye"></i> View Clients</a></td>
                            </tr>
                            <tr>
                                <td>michael.rafallo</td>
                                <td><span class="badge badge-info">10 Websites</span></td>
                                <td><a class="btn btn-block btn-default"><i class="fa fa-eye"></i> View Clients</a></td>
                            </tr>
                            <tr>
                                <td>edsel.pingol</td>
                                <td><span class="badge badge-info">5 Websites</span></td>
                                <td><a class="btn btn-block btn-default"><i class="fa fa-eye"></i> View Clients</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@stop