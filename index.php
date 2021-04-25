<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ปฏิทินผู้มาใช้บริการ | boychawin.com </title>
    <?php include './head.php'; ?>
    
    <script type="text/javascript">
        jQuery(document).ready(function() {

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                eventLimit: true, 
                defaultDate: new Date(),
                timezone: 'Asia/Bangkok',
                events: {
                    url: './dataEvents.php',
                },
                loading: function(bool) {
                    $('#loading').toggle(bool);
                },

                eventClick: function(event) {
                    if (event.url) {
                        $.fancybox({
                            'href': event.url,
                            'type': 'iframe',
                            'autoScale': false,
                            'openEffect': 'elastic',
                            'openSpeed': 'fast',
                            'closeEffect': 'elastic',
                            'closeSpeed': 'fast',
                            'closeBtn': true,
                            onClosed: function() {
                                parent.location.reload(true);
                            },
                            helpers: {
                                thumbs: {
                                    width: 50,
                                    height: 50
                                },

                                overlay: {
                                    css: {
                                        'background': 'rgba(49, 176, 213, 0.7)'
                                    }
                                }
                            }
                        });
                        return false;
                    }
                },
            });
        });
    </script>

</head>

<body background="https://boychawin.com/B_images/logoboychawins.com.png">

    <div id="wrapper">
        <div class="container">
            <div class="row">

                <div class='col-md-12'>
                    <div class="panel panel-default">
                        <div class="panel-heading bg-dark">
                            ปฏิทินผู้มาใช้บริการ
                        </div>
                        <div class="panel-body">


                            <div class="row">
                                <div class="col-lg-12">
                                    <div id='calendar'></div>
                                    <div style="margin:10px 0 50px 0;" align="center">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>