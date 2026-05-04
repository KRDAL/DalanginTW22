    <!DOCTYPE html>
    <html>
    <head>
        <title>Measure Conversion Chart</title>
        <style>
            body { font-family: Arial, sans-serif; border: 2px solid #556B2F; padding: 20px; width: 600px; }
            .header { text-align: center; font-weight: bold; color: #2E8B57; }
            .section-title { background-color: #f2f2f2; padding: 5px; margin-top: 15px; font-weight: bold; }
            .row { display: flex; justify-content: space-between; border-bottom: 1px solid #ccc; padding: 5px 0; }
        </style>
    </head>
    <body>
        <div class="header">MEASURE CONVERSION CHART - LENGTHS (UK)</div>
        <p>Name: ____________________ Date: __________</p>

        <div class="section-title">METRIC CONVERSIONS</div>
        <?php
        $cm = 1; $dm = 1; $m = 1; $km = 1;
        echo "<div class='row'><span>1 centimetre</span> <span>= " . ($cm * 10) . " millimetres</span></div>";
        echo "<div class='row'><span>1 decimetre</span> <span>= " . ($dm * 10) . " centimetres</span></div>";
        echo "<div class='row'><span>1 metre</span> <span>= " . ($m * 100) . " centimetres</span></div>";
        echo "<div class='row'><span>1 kilometre</span> <span>= " . ($km * 1000) . " metres</span></div>";
        ?>

        <div class="section-title">METRIC -> IMPERIAL CONVERSIONS</div>
        <?php
        $mm = 1; $cm = 1; $m = 1; $km = 1;
        echo "<div class='row'><span>1 millimetre</span> <span>= " . ($mm * 0.03937) . " inches</span></div>";
        echo "<div class='row'><span>1 metre</span> <span>= " . ($m * 3.28084) . " feet</span></div>";
        echo "<div class='row'><span>1 kilometre</span> <span>= " . ($km * 0.62137) . " miles</span></div>";
        ?>
    </body>
    </html>