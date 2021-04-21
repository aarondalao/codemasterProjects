<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Construction of Mortgage Equation</title>
</head>

<body>
        <?php
        /***********************************************************************
        ---Calculate the monthly mortgage repayments using the formulae below---
        ------Monthly Interest Rate [MIR] = Interest Rate Percentage / 1200-----
        ---------------Loan Term in Months [LTM] = Loan Term * 12---------------
        -------------------------Power = (1 + MIR) ^ LTM------------------------
        ----------Repayments = Loan Amount * MIR * Power / (Power - 1)----------
        ------------------------------------------------------------------------
        -----Output the Loan Amount, Interest Rate Percentage, and Loan Term----
        ***********************************************************************/
        /*$loan = 0;
        $rate = 0;
        $term = 0;
        $repayments = 0;
*/  
        if (isset($_GET['loanAmount']) > 0) 
        {
            $loan = $_GET['loanAmount'];
            $interest = $_GET['interest'];
            $years = $_GET['term'];

            
            $afterPregReplace = preg_replace("//")


            $rate = $interest / 1200;
            $term = $years * 12;

            $power = (1 + $rate) ** $term;

            $repayments = $loan * $rate * $power / ($power - 1);
            

        } else {
            echo '<p> loan amount, rate, and term required';
            $loan = 0;
        }

        
    ?>
    <form action="exercise.php" method="_GET">
        <h2>Loan Details</h2>

        <p>
            Loan amount: 
            <input type="number" name="loanAmount"/><br/><br/><br/>
       
            interest:
            <input type="number" name="interest"/><br/><br/><br/>

            term(years to pay):
            <input type="number" name="term"><br/><br/><br/>
            <input type="submit" name="calculate" value="calculate"/>
            
        </p>

    </form>

    <p>loan amount is:  <?php echo $loan; ?> </p>
    <p>interest rate is:  <?php echo $rate; ?> </p>
    <p>month term to pay is:  <?php echo $term; ?> mnts</p>

    <h2>Mortgage Repayment</h2>

    <p>$<?php echo number_format($repayments, 2);?> / month</p>

</body>

</html>