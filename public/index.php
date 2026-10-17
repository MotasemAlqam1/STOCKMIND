<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>STOCKMIND | Smart Inventory Management</title>

    <!-- Bootstrap 5 RTL -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css">

    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Landing Page CSS -->
    <link rel="stylesheet" href="assets/css/landing.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top">
        <div class="container">

            <!-- Logo -->
            <a class="navbar-brand fw-bold" href="index.php">
                STOCK<span class="text-primary">MIND</span>
            </a>

            <!-- Mobile Menu Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
                aria-controls="mainNavbar" aria-expanded="false" aria-label="فتح قائمة التنقل">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Links -->
            <div class="collapse navbar-collapse" id="mainNavbar">

                <ul class="navbar-nav mx-auto gap-lg-3">

                    <li class="nav-item">
                        <a class="nav-link active" href="#home">
                            الرئيسية
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#features">
                            المميزات
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#how-it-works">
                            كيف يعمل؟
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">
                            الأسعار
                        </a>
                    </li>

                </ul>

                <div class="d-flex gap-2 align-items-center">

                    <!-- Future Language Switcher -->
                    <button type="button" class="btn btn-outline-secondary btn-sm">
                        EN
                    </button>

                    <!-- Future Theme Switcher -->
                    <button type="button" class="btn btn-outline-secondary btn-sm" aria-label="تغيير المظهر">
                        ☾
                    </button>

                    <a href="login.php" class="btn btn-outline-primary">
                        تسجيل الدخول
                    </a>

                    <a href="register.php" class="btn btn-primary">
                        ابدأ الآن
                    </a>

                </div>
            </div>

        </div>
    </nav>


    <!-- ============================= -->
    <!-- Hero Section -->
    <!-- ============================= -->

    <section id="home" class="hero-section py-5">

        <div class="container">

            <div class="row align-items-center g-5">

                <!-- Hero Content -->
                <div class="col-12 col-lg-6">

                    <span class="hero-badge">
                        SMART AUTO PARTS MANAGEMENT
                    </span>

                    <h1 class="hero-title mt-4">
                        إدارة مخزونك أصبحت
                        <span>أذكى وأسهل</span>
                    </h1>

                    <p class="hero-description mt-3">
                        STOCKMIND منصة ذكية تساعد شركات قطع غيار
                        السيارات على إدارة المستودعات والمخزون
                        والموردين من مكان واحد بسهولة ودقة.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="d-flex flex-wrap gap-3 mt-4">

                        <a href="#" class="btn btn-primary btn-lg">
                            ابدأ الآن
                        </a>

                        <a href="#features" class="btn btn-outline-secondary btn-lg">
                            اكتشف المميزات
                        </a>

                    </div>

                    <!-- Supporting Text -->
                    <p class="hero-note mt-4">
                        إدارة متعددة المستودعات • متابعة المخزون •
                        تقارير وتحليلات
                    </p>

                </div>

                <!-- Dashboard Preview -->
                <div class="col-12 col-lg-6">

                    <div class="hero-dashboard card border-0">

                        <div class="card-body p-4">

                            <div class="d-flex justify-content-between align-items-center mb-4">

                                <h5 class="mb-0">
                                    Inventory Overview
                                </h5>

                                <span class="badge text-bg-success">
                                    Demo
                                </span>

                            </div>

                            <div class="row g-3">

                                <div class="col-6">
                                    <div class="preview-stat">
                                        <h4>2,450</h4>
                                        <p>Total Parts</p>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="preview-stat">
                                        <h4>6</h4>
                                        <p>Warehouses</p>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="preview-stat">
                                        <h4>42</h4>
                                        <p>Low Stock</p>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="preview-stat">
                                        <h4>128</h4>
                                        <p>Orders</p>
                                    </div>
                                </div>

                            </div>

                            <div class="preview-footer mt-4">
                                Inventory data is for demonstration.
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ================================= -->
    <!-- Features Section -->
    <!-- ================================= -->

    <section id="features" class="features-section py-2">

        <div class="container py-2">

            <!-- Section Heading -->
            <div class="text-center mb-5">

                <span class="section-label">
                    لماذا STOCKMIND؟
                </span>

                <h2 class="section-title mt-3">
                    كل ما تحتاجه لإدارة مخزونك
                </h2>

                <p class="section-description mx-auto">
                    أدوات متكاملة تساعدك على تنظيم قطع الغيار،
                    إدارة المستودعات، وتتبع عمليات المخزون
                    والمشتريات من منصة واحدة.
                </p>

            </div>

            <!-- Features Grid -->
            <div class="row g-4">

                <!-- Feature 1 -->
                <div class="col-12 col-md-6 col-lg-4">

                    <div class="card feature-card h-100">

                        <div class="card-body p-4">

                            <div class="feature-icon">
                                🏬
                            </div>

                            <h3 class="feature-title">
                                إدارة المستودعات
                            </h3>

                            <p class="feature-description">
                                تنظيم المستودعات والرفوف ومواقع
                                تخزين قطع الغيار، مع عرض الكميات
                                المتوفرة في كل موقع.
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Feature 2 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card feature-card h-100">
                        <div class="card-body p-4">

                            <div class="feature-icon">📦</div>

                            <h3 class="feature-title">
                                إدارة قطع الغيار
                            </h3>

                            <p class="feature-description">
                                تنظيم الأصناف باستخدام SKU،
                                وأرقام القطع والعلامات التجارية،
                                مع سهولة البحث والتصنيف.
                            </p>

                        </div>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card feature-card h-100">
                        <div class="card-body p-4">

                            <div class="feature-icon">🚚</div>

                            <h3 class="feature-title">
                                إدارة الشحنات
                            </h3>

                            <p class="feature-description">
                                متابعة الشحنات الواردة ومراجعة
                                الكميات المستلمة والمتضررة
                                والناقصة عند الاستلام.
                            </p>

                        </div>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card feature-card h-100">
                        <div class="card-body p-4">

                            <div class="feature-icon">🤝</div>

                            <h3 class="feature-title">
                                إدارة الموردين
                            </h3>

                            <p class="feature-description">
                                حفظ معلومات الموردين وتنظيم
                                طلبات الشراء لتسهيل عمليات
                                التوريد والمتابعة.
                            </p>

                        </div>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card feature-card h-100">
                        <div class="card-body p-4">

                            <div class="feature-icon">📊</div>

                            <h3 class="feature-title">
                                التقارير والتحليلات
                            </h3>

                            <p class="feature-description">
                                عرض تقارير واضحة عن كميات
                                المخزون وحركة الأصناف وأداء
                                المستودعات.
                            </p>

                        </div>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card feature-card h-100">
                        <div class="card-body p-4">

                            <div class="feature-icon">🔔</div>

                            <h3 class="feature-title">
                                تنبيهات المخزون
                            </h3>

                            <p class="feature-description">
                                عرض تنبيهات عند انخفاض مخزون
                                قطع الغيار للمساعدة على
                                التخطيط لإعادة الطلب.
                            </p>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>


    <!-- ================================= -->
    <!-- How It Works Section -->
    <!-- ================================= -->

    <section id="how-it-works" class="how-it-works-section py-5">

        <div class="container py-4">

            <!-- Section Heading -->
            <div class="text-center mb-5">

                <span class="section-label">
                    كيف يعمل STOCKMIND؟
                </span>

                <h2 class="section-title mt-3">
                    ابدأ إدارة مخزونك في 3 خطوات
                </h2>

                <p class="section-description mx-auto">
                    ابدأ باستخدام STOCKMIND بخطوات بسيطة
                    لتنظيم شركتك ومستودعاتك ومتابعة المخزون.
                </p>

            </div>

            <!-- Steps Grid -->
            <div class="row g-4">

                <!-- Step 1 -->
                <div class="col-12 col-md-4">

                    <div class="process-card h-100">

                        <span class="process-number">01</span>

                        <div class="process-icon" aria-hidden="true">
                            🏢
                        </div>

                        <h3 class="process-title">
                            أنشئ حساب شركتك
                        </h3>

                        <p class="process-description">
                            أنشئ حسابًا لشركتك وأدخل بياناتها
                            الأساسية لتبدأ في إعداد نظام
                            إدارة المخزون.
                        </p>

                    </div>

                </div>

                <!-- Step 2 -->
                <div class="col-12 col-md-4">

                    <div class="process-card h-100">

                        <span class="process-number">02</span>

                        <div class="process-icon" aria-hidden="true">
                            📦
                        </div>

                        <h3 class="process-title">
                            أضف المستودعات وقطع الغيار
                        </h3>

                        <p class="process-description">
                            أنشئ المستودعات والرفوف وأضف
                            قطع الغيار وأرقام SKU، ثم
                            نظّم مواقع تخزينها.
                        </p>

                    </div>

                </div>

                <!-- Step 3 -->
                <div class="col-12 col-md-4">

                    <div class="process-card h-100">

                        <span class="process-number">03</span>

                        <div class="process-icon" aria-hidden="true">
                            📊
                        </div>

                        <h3 class="process-title">
                            راقب المخزون واتخذ القرارات
                        </h3>

                        <p class="process-description">
                            تابع كميات المخزون والتنبيهات
                            والتقارير لمساعدتك على تنظيم
                            عمليات الشراء والمستودعات.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ================================= -->
    <!-- Pricing Section -->
    <!-- ================================= -->

    <section id="pricing" class="pricing-section py-3">

        <div class="container py-2">

            <!-- Section Heading -->
            <div class="text-center mb-4">

                <span class="section-label">
                    خطط الاشتراك
                </span>

                <h2 class="section-title mt-3">
                    اختر الخطة المناسبة لشركتك
                </h2>

                <p class="section-description mx-auto">
                    خطط اشتراك مرنة لإدارة المستودعات
                    وقطع الغيار والمشتريات من منصة واحدة.
                </p>


            </div>

            <!-- Pricing Cards -->
            <div class="row g-4 justify-content-center">

                <!-- Starter Plan -->
                <div class="col-12 col-md-6 col-lg-4">

                    <div class="card pricing-card h-100">

                        <div class="card-body p-4 d-flex flex-column">

                            <h3 class="pricing-plan">Starter</h3>

                            <p class="pricing-description">
                                مناسبة للشركات الصغيرة
                            </p>

                            <div class="pricing-amount">
                                15 <small>د.أ / شهر</small>
                            </div>

                            <p class="pricing-yearly">
                                أو 150 د.أ سنويًا
                            </p>

                            <hr>

                            <ul class="pricing-features list-unstyled">
                                <li>✓ مستودع واحد</li>
                                <li>✓ حتى 500 صنف</li>
                                <li>✓ مستخدمان</li>
                                <li>✓ إدارة المخزون الأساسية</li>
                                <li>✓ تنبيهات انخفاض المخزون</li>
                            </ul>

                            <a href="#" class="btn btn-outline-primary w-100 mt-auto">
                                اختر الخطة
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Growth Plan -->
                <div class="col-12 col-md-6 col-lg-4">

                    <div class="card pricing-card pricing-popular h-100">

                        <span class="popular-badge">
                            الأكثر اختيارًا
                        </span>

                        <div class="card-body p-4 d-flex flex-column">

                            <h3 class="pricing-plan">Growth</h3>

                            <p class="pricing-description">
                                مناسبة للشركات المتنامية
                            </p>

                            <div class="pricing-amount">
                                35 <small>د.أ / شهر</small>
                            </div>

                            <p class="pricing-yearly">
                                أو 350 د.أ سنويًا
                            </p>

                            <hr>

                            <ul class="pricing-features list-unstyled">
                                <li>✓ حتى 5 مستودعات</li>
                                <li>✓ أصناف غير محدودة</li>
                                <li>✓ حتى 10 مستخدمين</li>
                                <li>✓ إدارة الموردين والمشتريات</li>
                                <li>✓ تقارير المخزون</li>
                            </ul>

                            <a href="#" class="btn btn-primary w-100 mt-auto">
                                اختر الخطة
                            </a>

                        </div>

                    </div>

                </div>

                <!-- Business Plan -->
                <div class="col-12 col-md-6 col-lg-4">

                    <div class="card pricing-card h-100">

                        <div class="card-body p-4 d-flex flex-column">

                            <h3 class="pricing-plan">Business</h3>

                            <p class="pricing-description">
                                مناسبة للشركات الأكبر
                            </p>

                            <div class="pricing-amount">
                                75 <small>د.أ / شهر</small>
                            </div>

                            <p class="pricing-yearly">
                                أو 750 د.أ سنويًا
                            </p>

                            <hr>

                            <ul class="pricing-features list-unstyled">
                                <li>✓ مستودعات متعددة</li>
                                <li>✓ أصناف غير محدودة</li>
                                <li>✓ مستخدمون متعددون</li>
                                <li>✓ إدارة الشحنات والمشتريات</li>
                                <li>✓ تقارير وتحليلات موسعة</li>
                            </ul>

                            <a href="#" class="btn btn-outline-primary w-100 mt-auto">
                                اختر الخطة
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ================================= -->
    <!-- CTA Section -->
    <!-- ================================= -->

    <section class="cta-section py-5">

        <div class="container py-5">

            <div class="row justify-content-center">

                <div class="col-12 col-lg-9 text-center">

                    <span class="cta-label">
                        ابدأ رحلتك مع STOCKMIND
                    </span>

                    <h2 class="cta-title mt-3">
                        جاهز لإدارة مخزونك بطريقة أذكى؟
                    </h2>

                    <p class="cta-description mt-3">
                        نظّم المستودعات وقطع الغيار والموردين
                        من مكان واحد، وابدأ ببناء نظام إدارة
                        مخزون أكثر وضوحًا وكفاءة.
                    </p>

                    <div class="d-flex flex-wrap gap-3
                            justify-content-center mt-4">

                        <a href="#" class="btn btn-light btn-lg cta-primary-btn">
                            ابدأ الآن
                        </a>

                        <a href="#features" class="btn btn-outline-light btn-lg">
                            اكتشف المميزات
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ================================= -->
    <!-- Footer -->
    <!-- ================================= -->

    <footer class="site-footer">

        <div class="container">

            <div class="row g-4">

                <!-- Brand Information -->
                <div class="col-12 col-md-6 col-lg-5">

                    <a href="#home" class="footer-brand text-decoration-none">
                        STOCK<span>MIND</span>
                    </a>

                    <p class="footer-description mt-3">
                        STOCKMIND منصة لإدارة مستودعات
                        قطع غيار السيارات، تساعد الشركات
                        على تنظيم المخزون والموردين
                        والمشتريات من مكان واحد.
                    </p>

                </div>

                <!-- Platform Links -->
                <div class="col-6 col-md-3 col-lg-3">

                    <h3 class="footer-heading">
                        المنصة
                    </h3>

                    <ul class="footer-links list-unstyled">

                        <li>
                            <a href="#home">الرئيسية</a>
                        </li>

                        <li>
                            <a href="#features">المميزات</a>
                        </li>

                        <li>
                            <a href="#how-it-works">كيف يعمل؟</a>
                        </li>

                        <li>
                            <a href="#pricing">الأسعار</a>
                        </li>

                    </ul>

                </div>

                <!-- Account Links -->
                <div class="col-6 col-md-3 col-lg-4">

                    <h3 class="footer-heading">
                        الحساب
                    </h3>

                    <ul class="footer-links list-unstyled">

                        <li>
                            <a href="#">
                                تسجيل الدخول
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                إنشاء حساب شركة
                            </a>
                        </li>

                    </ul>

                </div>

            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom mt-5 pt-4">

                <p class="mb-0">
                    &copy; 2026 STOCKMIND.
                    All rights reserved.
                </p>

            </div>

        </div>

    </footer>


</body>

</html>