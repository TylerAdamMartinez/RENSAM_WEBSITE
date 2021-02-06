<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee page</title>

    <!-- Employee CSS File -->
    <link href="assets/css/style_employee.css" rel="stylesheet">
</head>
<body>

<div class="grid_container">
    <div class="grid_header">
        <!-- ======= Top Bar ======= -->
        <div class="grid_top_bar">
            <i>
                <a href="employee.php">Howdy, 
                    <?php
                        $employee_name = "John Doe"; 
                        echo $employee_name; 
                    ?>
                </a>
            </i>
        </div>

        <!-- ======= Date ======= -->
        <div class="date">
            <?php
                date_default_timezone_set("CST");
                echo date("d.m.Y");
            ?>
        </div>

        <!-- ======= Header ======= -->
        <header class="grid_logo_name">
            <a href="index.php">RENSAM</a>
        </header>
    </div><!-- end of grid header -->


    <!-- ======= Investments ======= -->
    <div class="grid_investments">
        <p>Investements</p>
            <a href="http://www.tdameritrade.com/home.page"><ul>TD Ameritrade Account</ul></a>
    </div>

    <!-- ======= Financial Reports ======= -->
    <div class="grid_financial_reports">
        <p>Financial Reports</p>
            <ul>Tax Documents</ul>
            <ul>Monthly Budgets</ul>
            <ul>Quarterly Forecasts</ul>
    </div>

    <!-- ======= Conference Room ======= -->
    <div class="grid_conference_room">
        <p>Conference Room</p>
            <a href="http://discord.gg/KcQSByHv"><ul>Discords</ul></a>
            <a href="http://zoom.us/"><ul>Zoom</ul></a>
    </div>

    <!-- ======= Agenda ======= -->            
    <div class="grid_agenda">
        <?php 
            echo "<a href='http://asana.com'><p>".$employee_name."'s Agenda</p></a>";
        ?>

        <table>
            <?php 
                $employee_tasks = [];
                if (!empty($employee_tasks)) {
                    echo '<ul>Past Due Tasks</ul>';
                } else {
                    echo '<ul>No Past Due Tasks</ul>';
                }
            ?>
            <ul>Upcoming Tasks</ul>
        </table>
    </div>

    <!-- ======= Employee HR ======= -->
    <div class="grid_HR">
        <p>Payday</p>
            <a href="http://discord.gg/KcQSByHv"><ul>Paychecks</ul></a>
            <a href="http://zoom.us/"><ul>W2 Tax Fillings</ul></a>
    </div>

</div><!-- end of grid container -->
</body>
</html>