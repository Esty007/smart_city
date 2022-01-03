<?php

error_reporting(0);
// To remove all errors, warnings, parse messages, and notices

include 'confighospital.php';
?><!DOCTYPE html>
<html>
<head>
  <!-- moving text -->
    <body>
        <style> 
        marquee {
            width: 100%;
            padding: 10px 0;
            background-color: lightblue;
        }
 
        </style>


        <marquee direction="left" scrollamount="4" onmouseover="this.stop()" onmouseout="this.start()">
	নো মাস্ক নো সার্ভিস। করোনাভাইরাসের বিস্তার রোধে এখনই ডাউনলোড করুন Corona Tracer BD অ্যাপ। ডাউনলোড করতে ক্লিক করুন <a href="https://bit.ly/coronatracerbd" target="_blank" style="color: blue;">https://bit.ly/coronatracerbd</a>। নিজে সুরক্ষিত থাকুন অন্যকেও নিরাপদ রাখুন। দেশের প্রথম ক্রাউডফান্ডিং প্ল্যাটফর্ম 'একদেশ'- এর মাধ্যমে আর্থিক অনুদান পৌঁছে দিন নির্বাচিত সরকারি-বেসরকারি প্রতিষ্ঠানসমূহে। ভিজিট করুন <a href="//ekdesh.ekpay.gov.bd" target="_blank" style="color: blue;">ekdesh.ekpay.gov.bd</a> অথবা <a href="//play.google.com/store/apps/details?id=com.synesis.donationapp" target="_blank" style="color: blue;">“Ek Desh”</a> অ্যাপ ডাউনলোড করুন। করোনার লক্ষণ দেখা দিলে গোপন না করে ডাক্তারের পরামর্শের জন্য ফ্রি কল করুন ৩৩৩ ও ১৬২৬৩ নম্বরে। করোনাভাইরাস প্রতিরোধে নিয়ম মেনে মাস্ক ব্যবহার করুন। আতঙ্কিত না হয়ে বরং সচেতন থাকুন। ভিজিট করুন <a href="//corona.gov.bd" target="_blank" style="color: blue;">corona.gov.bd</a>
</marquee>
        <marquee direction="scroll">Hospital list in your city.</marquee>
    </body>




    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>MySQL table search</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap.min.css">



    <style type="text/css" class="init">

        tfoot input {
            width: 100%;
            padding: 3px;
            box-sizing: border-box;
        }

        .dataTables_wrapper .dataTables_filter {
            float: right;
            text-align: right;
            visibility: hidden;
        }

        #search_wrapper{
            width: 98%;
        }

        table.dataTable > tbody > tr.child span.dtr-title{
            display: none;
        }
    </style>
    

    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap.min.js"></script>



 
    <script type="text/javascript" class="init">


        $(document).ready(function() {
            // Setup - add a text input to each footer cell
            $('#search thead th').each( function () {
                var title = $(this).text();
                $(this).html( ''+title+' <br><input type="text" class="filter" placeholder="Search '+title+'" />' );
            } );

            // DataTable
            var table = $('#search').DataTable({
                responsive: true,


                initComplete: function () {
                    // Apply the search
                    this.api().columns().every( function () {
                        var that = this;
                        $( 'input', this.header() ).on( 'keyup change clear', function () {
                            if ( that.search() !== this.value ) {
                                that
                                    .search( this.value )
                                    .draw();
                            }
                        } );
                    } );
                }
            });

            $('.filter').on('click', function(e){
                e.stopPropagation();
            });


        } );


    </script>
</head>

<body style="padding: 10px">

            <table id="search" class="table table-striped table-bordered display  responsive nowrap" style="width: 100%">
                <thead>
                <tr>
                <th><strong>Hospital Name</strong></td>
                    <th><strong>Area</strong></td>
                    <th><strong>Contact Number</strong></td>
                    <th><strong>Email</strong></td>
                    <th><strong>Details</strong></td>
                    <th><strong>Address</strong></td>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = 'SELECT * FROM ' . $SETTINGS['data_table'];

                if ($result = $mysqli->query($sql)) {
                    while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            
                            <td><?php echo $row['hospital_name']; ?></td>
                            <td><?php echo $row['area']; ?></td>
                            
                            <td><?php echo $row['phn_number']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['details']; ?></td>
                            <td><?php echo $row['Address']; ?></td>
                        </tr>
                    <?php }
                } else {
                     ?>
                <tr><td colspan="5">No results found.</td>
                    <?php
                }
                ?>
                </tbody>
                <tfoot>
                <tr>
                    <th><strong>Hospital Name</strong></td>
                    <th><strong>Area</strong></td>
                    <th><strong>Contact Number</strong></td>
                    <th><strong>Email</strong></td>
                    <th><strong>Details</strong></td>
                    <th><strong>Address</strong></td>
                </tr>
                </tfoot>
            </table>
</body>
</html>