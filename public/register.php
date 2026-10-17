
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>إنشاء حساب شركة | STOCKMIND</title>

    <!-- Bootstrap 5 RTL -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
    >

    <!-- Shared Styles -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Auth Pages Styles -->
    <link rel="stylesheet" href="assets/css/auth.css">
</head>

<body class="auth-page">

    <main class="auth-wrapper">

        <div class="container">

            <div class="row auth-container g-0">

                <!-- Registration Form -->
                <div class="col-12 col-lg-7">

                    <div class="auth-form-panel register-form-panel">

                        <!-- Logo -->
                        <a href="index.php"
                           class="auth-brand text-decoration-none">
                            STOCK<span>MIND</span>
                        </a>

                        <!-- Heading -->
                        <h1 class="auth-title mt-4">
                            إنشاء حساب شركة
                        </h1>

                        <p class="auth-description">
                            أدخل بيانات شركتك لإنشاء حساب
                            والبدء باستخدام STOCKMIND.
                        </p>

                        <!-- Frontend Demo Form -->
                        <form action="#" method="post">

                            <h2 class="register-section-title">
                                معلومات الشركة
                            </h2>

                            <div class="row g-3">

                                <!-- Company Name -->
                                <div class="col-12">

                                    <label for="companyName"
                                           class="form-label">
                                        اسم الشركة
                                    </label>

                                    <input
                                        type="text"
                                        id="companyName"
                                        name="company_name"
                                        class="form-control"
                                        placeholder="مثال: شركة المستقبل لقطع الغيار"
                                        autocomplete="organization"
                                        required
                                    >

                                </div>

                                <!-- Country -->
                                <div class="col-12 col-md-6">

                                    <label for="country"
                                           class="form-label">
                                        الدولة
                                    </label>

                                    <select
                                        id="country"
                                        name="country"
                                        class="form-select"
                                        required
                                    >
                                        <option value="" selected disabled>
                                            اختر الدولة
                                        </option>

                                        <option value="Jordan">الأردن</option>
                                        <option value="UAE">الإمارات</option>
                                        <option value="Saudi Arabia">
                                            السعودية
                                        </option>
                                        <option value="Other">أخرى</option>
                                    </select>

                                </div>

                                <!-- City -->
                                <div class="col-12 col-md-6">

                                    <label for="city"
                                           class="form-label">
                                        المدينة
                                    </label>

                                    <input
                                        type="text"
                                        id="city"
                                        name="city"
                                        class="form-control"
                                        placeholder="مثال: عمّان"
                                        required
                                    >

                                </div>

                            </div>

                            <h2 class="register-section-title mt-4">
                                بيانات مسؤول الشركة
                            </h2>

                            <div class="row g-3">

                                <!-- Full Name -->
                                <div class="col-12">

                                    <label for="fullName"
                                           class="form-label">
                                        الاسم الكامل
                                    </label>

                                    <input
                                        type="text"
                                        id="fullName"
                                        name="full_name"
                                        class="form-control"
                                        placeholder="اسم المسؤول عن الحساب"
                                        autocomplete="name"
                                        required
                                    >

                                </div>

                                <!-- Email -->
                                <div class="col-12 col-md-6">

                                    <label for="email"
                                           class="form-label">
                                        البريد الإلكتروني
                                    </label>

                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        class="form-control"
                                        placeholder="name@company.com"
                                        autocomplete="email"
                                        required
                                    >

                                </div>

                                <!-- Phone -->
                                <div class="col-12 col-md-6">

                                    <label for="phone"
                                           class="form-label">
                                        رقم الهاتف
                                    </label>

                                    <input
                                        type="tel"
                                        id="phone"
                                        name="phone"
                                        class="form-control"
                                        placeholder="+962..."
                                        autocomplete="tel"
                                        required
                                    >

                                </div>

                                <!-- Password -->
                                <div class="col-12 col-md-6">

                                    <label for="password"
                                           class="form-label">
                                        كلمة المرور
                                    </label>

                                    <input
                                        type="password"
                                        id="password"
                                        name="password"
                                        class="form-control"
                                        placeholder="8 أحرف على الأقل"
                                        autocomplete="new-password"
                                        minlength="8"
                                        required
                                    >

                                </div>

                                <!-- Confirm Password -->
                                <div class="col-12 col-md-6">

                                    <label for="confirmPassword"
                                           class="form-label">
                                        تأكيد كلمة المرور
                                    </label>

                                    <input
                                        type="password"
                                        id="confirmPassword"
                                        name="confirm_password"
                                        class="form-control"
                                        placeholder="أعد إدخال كلمة المرور"
                                        autocomplete="new-password"
                                        minlength="8"
                                        required
                                    >

                                </div>

                            </div>

                            <!-- Agreement -->
                            <div class="form-check mt-4 mb-4">

                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    id="acceptTerms"
                                    name="accept_terms"
                                    required
                                >

                                <label for="acceptTerms"
                                       class="form-check-label">
                                    أوافق على شروط الاستخدام
                                    وسياسة الخصوصية
                                </label>

                            </div>

                            <!-- Submit -->
                            <button
                                type="submit"
                                class="btn btn-primary w-100 auth-submit"
                            >
                                إنشاء حساب الشركة
                            </button>

                        </form>

                        <!-- Login Link -->
                        <p class="auth-bottom-text text-center mt-4">

                            لديك حساب بالفعل؟

                            <a href="login.php">
                                تسجيل الدخول
                            </a>

                        </p>

                        <a href="index.php"
                           class="auth-back-link">
                            العودة إلى الصفحة الرئيسية
                        </a>

                    </div>

                </div>

                <!-- Information Panel -->
                <div class="col-lg-5 d-none d-lg-flex">

                    <div class="auth-info-panel register-info-panel">

                        <div class="auth-info-content">

                            <div class="auth-info-icon">
                                🏢
                            </div>

                            <h2>
                                ابدأ إدارة شركتك بذكاء
                            </h2>

                            <p>
                                اجمع معلومات المستودعات
                                وقطع الغيار والموردين في
                                منصة واحدة.
                            </p>

                            <div class="register-benefits mt-4">

                                <p>✓ تنظيم المستودعات والرفوف</p>

                                <p>✓ متابعة كميات قطع الغيار</p>

                                <p>✓ إدارة الموردين والمشتريات</p>

                                <p>✓ تقارير وتنبيهات المخزون</p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

</body>
</html>
