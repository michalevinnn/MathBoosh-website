
<?php 
  $pageTitle = "MathBoost - קביעת שיעור פרטי";
  include 'includes/header.php'; 
?>


<main>
    <section class="booking-section">
        <div class="container">
            <h1 class="page-title">קביעת שיעור פרטי</h1>

            <div class="booking-layout">
                <aside class="teacher-info-card">
                    <div class="teacher-image-wrapper">
                        <img src="images/teacher_omer.jpeg" alt="עומר שמול" class="teacher-img">
                    </div>
                    <h3>עומר שמול</h3>
                    <p class="teacher-bio">מורה מוסמך משרד החינוך למתמטיקה. מומחה בהכנה לבגרויות</p>
                    <ul class="teacher-badges">
                        <li><i class="fas fa-check-circle"></i> זמינות גבוהה</li>
                        <li><i class="fas fa-graduation-cap"></i> מומחה בכל רמות הלימוד</li>
                    </ul>
                </aside>

                <div class="form-wrapper-card">
                    <form id="bookingForm" action="save_booking.php" method="POST">
                        
                        <div class="form-group">
                            <label>שם מלא *</label>
                            <input type="text" name="fullName" placeholder="הכנס שם מלא" required>
                        </div>

                        <div class="form-row">
                            <div class="form-group half-width">
                                <label>טלפון *</label>
                                <input type="tel" name="phone" placeholder="050-0000000" required>
                            </div>
                            <div class="form-group half-width">
                                <label>אימייל *</label>
                                <input type="email" name="email" placeholder="example@mail.com" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group half-width">
                                <label>כיתה *</label>
                                <select name="grade" id="gradeSelect" required>
                                    <option value="">בחר כיתה</option>
                                    <option value="י">כיתה י'</option>
                                    <option value="יא">כיתה י"א</option>
                                    <option value="יב">כיתה י"ב</option>
                                </select>
                            </div>
                            <div class="form-group half-width">
                                <label>יחידות לימוד *</label>
                                <select name="units" id="unitSelect" required>
                                    <option value="">בחר יחידות</option>
                                    <option value="3">3 יחידות</option>
                                    <option value="4">4 יחידות</option>
                                    <option value="5">5 יחידות</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group half-width">
                                <label>נושא השיעור *</label>
                                <select name="subject" id="subjectSelect" disabled required>
                                    <option value="">בחר קודם כיתה ויחידות</option>
                                </select>
                            </div>
                            <div class="form-group half-width">
                                <label>סוג השיעור *</label>
                                <select name="lessonType" required>
                                    <option value="">בחר סוג שיעור</option>
                                    <option value="פרונטלי">פרונטלי (בית המורה)</option>
                                    <option value="זום">שיעור בזום</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group half-width">
                                <label>תאריך *</label>
                                <input type="date" name="lessonDate" id="lessonDate" required>
                            </div>
                            <div class="form-group half-width">
                                <label>שעה (15:00-20:00) *</label>
                                <select name="lessonTime" id="lessonTimeSelect" required>
                                    <option value="">בחר שעה</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="17:00">17:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="19:00">19:00</option>
                                    <option value="20:00">20:00</option>
                                </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">
                            קבע שיעור עם עומר
                        </button>
                    </form>

                    <div id="successMessage" style="display:none; text-align:center; padding:50px;">
                        <h2 id="successTitle" style="color:#1a2a4a; font-weight:700;"></h2>
                        <p style="font-size:18px;">הבקשה נשלחה בהצלחה. ניצור קשר בהקדם!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

 <?php include 'includes/footer.php'; ?>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/booking.js"></script>

</body>
</html>