<?php 
  $pageTitle = "MathBoost - מאגר נושאי לימוד";
  include 'includes/header.php'; 
?>

    <main class="lessons-page">
        <section class="page-intro">
            <div class="container">
                <h1>מה תרצה ללמוד היום?</h1>
                <p>השתמש בפילטרים כדי למצוא את נושאי הלימוד המדויקים לרמה ולכיתה שלך.</p>
            </div>
        </section>

        <div class="container lessons-layout">
            
        <aside class="filters-sidebar">
            <div class="filter-group">
                <h4>שכבת גיל</h4>
                <label><input type="radio" name="grade" value="all" checked> הכל</label>
                <label><input type="radio" name="grade" value="י'"> כיתה י'</label>
                <label><input type="radio" name="grade" value="י&quot;א"> כיתה י"א</label>
                <label><input type="radio" name="grade" value="י&quot;ב"> כיתה י"ב</label>
            </div>

            <div class="filter-group">
                <h4>רמת לימוד</h4>
                <label><input type="radio" name="units" value="all" checked> הכל</label>
                <label><input type="radio" name="units" value="3"> 3 יחידות</label>
                <label><input type="radio" name="units" value="4"> 4 יחידות</label>
                <label><input type="radio" name="units" value="5"> 5 יחידות</label>
            </div>
        </aside>

            <section class="lessons-content">
                <div id="activeFilterLabel" class="active-filter-status">מציג את כל הנושאים</div>
                <div class="lessons-grid" id="subjectsGrid">
                    </div>
                <div id="noResults" class="no-results" style="display: none;">
                    <i class="fas fa-search"></i>
                    <p>לא נמצאו נושאים התואמים לחיפוש שלך.</p>
                </div>
            </section>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <script src="js/lessons.js"></script>

</body>
</html>