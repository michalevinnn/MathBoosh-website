    <?php 
        $pageTitle = "MathBoost - תרגול יחידת לימוד";
        include 'includes/header.php'; 
    ?>


    <main class="lesson-unit-page">
        <section class="lesson-hero">
            <div class="container">
                <nav class="breadcrumb">
                    <a href="index.php">דף הבית</a> 
                    <i class="fas fa-chevron-left"></i> 
                    <a href="lessons.php">נושאי לימוד</a> 
                    <i class="fas fa-chevron-left"></i> 
                    <a href="lesson-unit.php">גדילה ודעיכה</a> 
                    <i class="fas fa-chevron-left"></i> 
                    <span>בחן את עצמך</span>
                </nav>
                <h1>בחן את עצמך: גדילה ודעיכה</h1>
            </div>
        </section>

        <div class="container quiz-card">
            <div id="step-label" class="step-indicator">סעיף 1 מתוך 6</div>
            <h3 id="question-title" style="margin-top: 10px;">שאלה מהמאגר</h3>
            

            <p id="instruction-text" style="font-size: 1.1em; font-weight: bold;"></p>

            <div id="options-grid" class="options-grid"></div>

            <div id="feedback" class="feedback-box"></div>
            
            <div class="next-step-container">
                <button id="next-btn" class="nest-bt">המשך לסעיף הבא <i class="fas fa-arrow-left"></i></button>
            </div>
        </div>
    </main>


    <?php include 'includes/footer.php'; ?>
    <script src="js/practice.js"></script>
</body>
</html>