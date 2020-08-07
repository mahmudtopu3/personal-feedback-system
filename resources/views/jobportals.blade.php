<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>A Comparisons of Job Portals in Bangladesh</title>
        <link
            href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
            rel="stylesheet"
            id="bootstrap-css">
        <link
            href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"
            rel="stylesheet"
            id="bootstrap-css">

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script
            src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

        <style>
            .contact-form {
                padding: 2%;
                border-radius: 10px;
                width: 95%;
                font-size: 14px;
                margin-left: auto;
                margin-right: auto;
                margin-top: 1%;
            }
            .title {
                padding-left: 1%;
            }
            .headings{
                padding: 1%;
                border-radius: 10px;
                width: 95%;
                font-size: 14px;
                margin-left: auto;
                margin-right: auto;
                margin-top: 1%;
                text-align:center;
                background-color:white;
            }
        </style>

    </head>
    <body>

        <div class="container-fluid ">

            @if ($message = Session::get('success'))

            <div class="alert alert-primary">

                <p class="text-center">{{ $message }}</p>

            </div>

            @endif @if ($errors->any())

            <div class="alert alert-danger">

                <strong>Whoops!</strong>
                There were some problems with your input.<br><br>

                <ul>

                    @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

            @endif

            <div class="  headings">

                <h4>A Comparisons of Job Portals in Bangladesh</h4> 
                
                <p> By: Md. Mahmudul Huq</p>
                <p>Date: 7<sup>th</sup> Aug, 2020</p>
            </div>

            <!--General-->
            <div class="row  contact-form">

                <h4>General Comporasion</h4>

                <br>
                <div class="table-responsive">
                    <table
                        id="general"
                        class="table table-striped table-bordered"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Site</th>
                                <th>Foundation Year</th>
                                <th>Global Rank</th>
                                <th>BD Rank</th>
                                <th>Multinational</th>
                                <th>Current Jobs</th>
                                <th>Supported Language</th>
                                <th>Facebook Page Likes</th>
                                <th>Youtube Subscribers</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $value)
                            <tr>
                                <td>
                                    <b>
                                        <a href="{{ $value->domain }}">{{ $value->domain }}</a>
                                    </b>
                                </td>
                                <td>{{ $value->establishment }}</td>
                                <td>{{ $value->global_rank }}</td>
                                <td>{{ $value->bd_rank }}</td>
                                <td>{{ $value->multinational }}</td>
                                <td>{{ $value->current_jobs }}</td>
                                <td>{{ $value->languages }}</td>
                                <td>{{ $value->fb_likes }}</td>
                                <td>{{ $value->yt_subs }}</td>

                            </tr>
                            @endforeach
                        </tfoot>
                    </table>
                </div>
            </div>
            <!--End of General-->

            <!--Features-->
            <div class="row  contact-form">

                <h4>Features Comporasion</h4>

                <br>
                <div class="table-responsive">
                    <table
                        id="features"
                        class="table table-striped table-bordered"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Site</th>
                                <th>Job Alert</th>
                                <th>Live Search</th>
                                <th>Filter Search</th>
                                <th>Social Auth</th>
                                <th>Resume Builder</th>
                                <th>Assesment Test</th>
                                <th>Courses</th>
                                <th>Premium Support</th>
                                <th>Social Networking</th>
                                <th>Blog</th>
                                <th>Forum</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $value)
                            <tr>
                                <td>
                                    <b>
                                        <a href="{{ $value->domain }}">{{ $value->domain }}</a>
                                    </b>
                                </td>
                                <td>{{ $value->job_alert }}</td>
                                <td>{{ $value->live_search }}</td>
                                <td>{{ $value->filter_search }}</td>
                                <td>{{ $value->social_auth }}</td>
                                <td>{{ $value->resume_builder }}</td>
                                <td>{{ $value->assesment }}</td>
                                <td>{{ $value->courses }}</td>
                                <td>{{ $value->premium_support }}</td>
                                <td>{{ $value->social_networking }}</td>
                                <td>{{ $value->blog }}</td>
                                <td>{{ $value->forum }}</td>

                            </tr>
                            @endforeach
                        </tfoot>
                    </table>
                </div>
            </div>
            <!--End of Features-->

            <!--Technical-->
            <div class="row  contact-form">

                <h4>Technical Comporasion</h4>

                <br>
                <div class="table-responsive">
                    <table
                        id="technical"
                        class="table table-striped table-bordered"
                        style="width:100%">
                        <thead>
                            <tr>
                                <th>Site</th>
                                <th>Based On</th>
                                <th>GT Matrix</th>
                                <th>Responsiveness</th>
                                <th>IOS Support</th>
                                <th>Android Support</th>
                    

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $value)
                            <tr>
                                <td>
                                    <b>
                                        <a href="{{ $value->domain }}">{{ $value->domain }}</a>
                                    </b>
                                </td>
                                <td>{{ $value->based_on }}</td>
                                <td>{{ $value->gt_matrix }}</td>
                                <td>{{ $value->responsive }}</td>
                                <td>{{ $value->ios }}</td>
                                <td>{{ $value->android }}</td>
                       

                            </tr>
                            @endforeach
                        </tfoot>
                    </table>
                </div>
            </div>
            <!--End of Technical-->

        </div>
    </body>
    <script>
        $(document).ready(function () {
            $('#general').DataTable();
        });
        $(document).ready(function () {
            $('#features').DataTable();
        });
        $(document).ready(function () {
            $('#technical').DataTable();
        });

        
    </script>

</html>