<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Treatment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="./Treatment.css" />
</head>

<body>
    <!--start Navbra-->
    <div class="container-fluid px-4">
        <div class="row">
            <div class="col-md-12">
                <?php
                include('../includes/temp/navbar.php');
                ?>
            </div>
        </div>
    </div>

    <!--End Navbar-->
    <!--start main content-->
    <div class="container-fluid mx-4">
        <div class="row">
            <div class="col-md-8">
                <h1>Insulin, Medicines, & Other Diabetes Treatments</h1>
                <hr />
                <h2>What medicines might I take for diabetes?</h2>
                <p>
                    The medicine you take <span>depends</span> on the <span>type of diabetes</span> you have and
                    <span>how well the medicine controls your blood glucose levels</span>, also
                    called blood sugar levels. Other factors, such as any other <span> health
                        conditions</span> you may have, <span>medication costs,</span> your <span>insurance coverage
                        and copays</span>, <span>access to care</span>, and <span>your lifestyle</span>, may affect what
                    diabetes medicine you take.
                </p>
                <h2>What type of diabetes do I have?</h2>
                <li>
                    <a href="../About Diabetes/Type1 Diabetes.php">Type 1 diabetes</a>
                </li>
                <p>
                    If you have <span>type 1 diabetes</span>, you must take <span>insulin</span> because your
                    pancreas does not make it. You will need to take insulin several
                    times during the day, including when you eat and drink, to control
                    your blood glucose level. <br />

                    There are different <span>ways to take insulin</span>. You can use <span>a needle </span>and
                    <span>syringe, an insulin pen,</span> or <span>an insulin pump</span>. An <span>artificial
                        pancreas—</span>also called an automated insulin delivery system—may be
                    another option for some people.
                </p>
                <li>
                    <a href="../About Diabetes/Type2 Diabetes.php">Type 2 diabetes</a>
                </li>
                <p>
                    Some people with <span>type 2 diabetes</span> can control their blood glucose
                    level by making lifestyle changes. These lifestyle changes include
                    <span>consuming healthy meals</span> and <span>beverages, limiting calories</span> if they
                    have overweight or obesity, and getting <span>physical activity</span>. <br />

                    Many people with type 2 diabetes need to take diabetes medicines as
                    well. These medicines may include <span>diabetes pills</span> or medicines you
                    inject, such as <span>insulin</span>. <span>Over time</span>, you may need <span>more than one
                        diabetes medicine</span> to control your blood glucose level. Even if you
                    do not take insulin, you may need it at special times, such as if
                    you are pregnant or if you are in the hospital for treatment.
                </p>

                <li>
                    <a href="../About Diabetes/Gestational Diabetes.php">Gestational diabetes</a>
                </li>
                <p>
                    If you have <span>gestational diabetes,</span> you can manage your blood glucose
                    level by <span>following a healthy eating plan</span> and <span>doing a
                        moderate-intensity physical activity</span>, such as brisk walking for 150
                    minutes, each week. If consuming healthy food and beverages and
                    getting regular physical activity aren’t enough to keep your blood
                    glucose level in your target range, a doctor will work with you and
                    may recommend you take insulin. <span>Insulin is safe to take while you
                        are pregnant.</span> <br />
                    No matter what type of diabetes you have, taking diabetes medicines
                    every day can feel like a burden sometimes. New medications and
                    improved delivery systems can help make it easier to manage your
                    blood glucose levels. Talk with your doctor to find out which
                    medications and delivery systems will work best for you and fit into
                    your lifestyle.
                </p>
                <h2>What are the different types of insulin?</h2>
                <p>
                    Several types of insulin are available. Each type starts to work at
                    a different speed, known as “<span>onset</span>,” and its <span> effects last a
                        different length of time</span>, known as “duration.” Most types of insulin
                    reach a <span>peak</span>, which is <span>when they have the strongest effect</span>. <span>After
                        the peak</span>, the <span>effects</span> of the <span>insulin</span> <span>wear off</span> over the next few
                    hours or so. <span>Table 1</span> lists the different <span>types of insulin</span>,<span> how fast</span>
                    they start to work, when they <span> peak</span>, and <span>how long they last.</span>
                </p>
                <h4>Types of insulin and how they work</h4>
            </div>

            <div class="col-md-10">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Insulin Type</th>
                                <th>How Fast It Starts to Work (onset)</th>
                                <th>When It Peaks</th>
                                <th>How Long It Lasts (duration)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>rapid-acting/ ultra rapid-acting</td>
                                <td>15 minutes</td>
                                <td>1 hour</td>
                                <td>2 to 4 hours (rapid) 5 to 7 hours (ultra)</td>
                            </tr>
                            <tr>
                                <td>rapid-acting, inhaled</td>
                                <td>10 to 15 minutes</td>
                                <td>30 minutes</td>
                                <td>3 hours</td>
                            </tr>
                            <tr>
                                <td>regular, also called short-acting</td>
                                <td>30 minutes</td>
                                <td>2 to 3 hours</td>
                                <td>3 to 6 hours</td>
                            </tr>
                            <tr>
                                <td>intermediate-acting</td>
                                <td>2 to 4 hours</td>
                                <td>4 to 12 hours</td>
                                <td>12 to 18 hours</td>
                            </tr>
                            <tr>
                                <td>long-acting</td>
                                <td>2 hours</td>
                                <td>does not peak</td>
                                <td>24 hours</td>
                            </tr>
                            <tr>
                                <td>ultra long-acting</td>
                                <td>6 hours</td>
                                <td>does not peak</td>
                                <td>36 hours or longer</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="col-md-8">
                <p>
                    <span>Another type</span> of insulin, called <span>premixed insulin</span>, is a combination
                    of insulins listed in Table 1. Premixed insulin starts to <span>work in 15
                        to 60 minutes</span> and can <span>last from 10 to 16 hours</span>. The peak time varies
                    depending on which insulins are mixed. <br />

                    Your doctor will work with you to review your medication options.
                    Talk with your doctor about your activity level, what you eat and
                    drink, how well you manage your blood glucose levels, your age and
                    lifestyle, and how long your body takes to absorb insulin. <br />

                    <span>Follow your doctor’s advice on when and how to take your insulin.</span> If
                    you're worried about the cost, talk with your doctor. Some types of
                    insulin cost more than others. You can also find resources to get
                    financial help for diabetes care. <br />
                </p>

                <h2>What <span>oral medicines</span> treat type 2 diabetes?</h2>
                <p>
                    You may need to take medicines to manage your type 2 diabetes, in
                    addition to consuming healthy foods and beverages and being
                    physically active. You can take many diabetes medicines by mouth.
                    These medicines are called oral medicines. <br />

                    Most people with <span>type 2 diabetes</span> start with <span>metformin</span> pills. Metformin also comes as a liquid. <span>Metformin helps</span> your
                    <span>liver make less glucose</span> and helps your body use insulin better. This
                    drug may <span>help you lose a small amount of weight</span>. <br />

                    Other oral medicines act in different ways to lower blood glucose
                    levels. <span>Combining two or three</span> kinds of diabetes <span>medicines</span> can <span>lower
                        blood glucose</span> levels <span>better than</span> taking just <span>one medicine.</span> <br />
                </p>
                <h2>What other injectable medicines treat diabetes?</h2>

                <h6>Type 1 diabetes</h6>
                <p>
                    If you have type 1 diabetes, your doctor may recommend you take
                    other medicines, in addition to insulin, to help control your blood
                    glucose. Some of these medicines work to slow how fast food and
                    beverages move through your stomach. These medicines also slow down
                    how quickly and how high your blood glucose levels rise after
                    eating. Other medicines work to block certain hormones in your
                    digestive system that raise blood glucose levels after meals or help
                    the kidneys to remove more glucose from your blood.
                </p>
                <h6>Type 2 diabetes</h6>
                <p>
                    <span>Besides insulin,</span> other types of <span>injected medicines</span> are available that will keep your blood glucose level
                    from rising too high after you eat or drink. These medicines, known
                    as <span>glucagon-like peptide-1 (GLP-1)</span> receptor agonists, may make you
                    feel less hungry and help you lose some weight. <span>GLP-1 medicines</span> <span>are
                        not substitutes for insulin.</span>
                </p>
                <h2>What should I know about side effects of diabetes medicines?</h2>
                <p><span>Side effects</span> are <span>problems </span>that <span>result from taking a medicine</span>. Some diabetes medicines can cause <span>hypoglycemia</span>, also called low blood glucose, if you don’t balance your medicines with food and activity. <br>

                    Ask your doctor whether your <span>diabetes medicine</span> <span>can cause hypoglycemia or other side effects</span>, such as <span> upset stomach</span> and <span>weight gain</span>. Aim to take your diabetes medicines as your doctor instructs you, to help prevent side effects and diabetes problems.</p>
                <h2>Do I have other treatment options for my diabetes?</h2>
                <p><span>If medicines</span> and <span>lifestyle changes</span> are <span>not enough</span> to manage your diabetes, there are <span>other treatments</span> that might help you. These treatments include <span>weight-loss (bariatric) surgery </span>for certain people with type 1 or type 2 diabetes, or <span>pancreatic islet transplantation </span>for some people with type 1 diabetes.</p>
                <h5>Weight-loss surgery</h5>
                <p><span>Weight-loss surgery </span> are <span>operations</span> that <span>help</span> you <span>lose weight</span> by making changes to your <span>digestive system.</span> Weight-loss surgery is also called bariatric or metabolic surgery. This type of surgery may help some people who have obesity and type 2 diabetes lose a large amount of weight and bring their blood glucose levels back to a healthy range. How long the improved response lasts can vary by patient, type of weight-loss surgery, and the amount of weight the person lost. Other factors include how long a person had diabetes and whether the person used insulin. Some people with type 2 diabetes may no longer need to use diabetes medicines after weight-loss surgery. <br>
                    Researchers are studying whether weight-loss surgery can help control blood glucose levels in people with type 1 diabetes who have obesity.
                </p>
                <h5>Pancreatic islet transplantation</h5>
                <p><span>Pancreatic islet transplantation</span> is an <span>experimental treatment</span> for people with <span>type 1 diabete</span>s who have trouble controlling their blood glucose levels. Pancreatic islets are clusters of cells in the pancreas that make the hormone insulin. In type 1 diabetes, the body’s immune system attacks these cells. A <span>pancreatic islet transplantation replaces destroyed islets with new islets</span> from organ donors. <span>The new islets make and release insulin.</span> Because researchers are still studying pancreatic islet transplantation External link, the procedure is only available to people enrolled in research studies.</p>
            </div>
        </div>
    </div>
    <p class="source">NIH National Institute of Diabetes and
        and Digestive Kidney Diseases</p>
    <!--end main section
-->


    <!--start Footer section-->
    <footer class="mt-4 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="pt-5">Diabetes</h2>
                    <hr />
                    <div class="text-center">
                        <i class="fa-brands fa-facebook-f"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-solid fa-house"></i>
                        <i class="fa-brands fa-linkedin"></i>
                    </div>
                </div>
                <div class="col-md-5 m-auto">
                    <form action="">
                        <input class="form-control" type="text" name="name" id="" placeholder="Name" />
                        <br />
                        <input class="form-control" type="email" name="email" id="" placeholder="E-mail" />
                        <br />
                        <textarea class="form-control" name="" id="" placeholder="Message"></textarea>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <!--end Footer section-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</body>

</html>