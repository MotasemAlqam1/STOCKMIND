
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>تسجيل الدخول | STOCKMIND</title>

    <!-- Bootstrap 5 RTL -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css">

    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Authentication CSS -->
    <link rel="stylesheet" href="assets/css/auth.css">
</head>

<body class="auth-page">

    <main class="auth-wrapper">

        <div class="container">

            <div class="row auth-container g-0">

                <!-- Login Form -->
                <div class="col-12 col-lg-6">

                    <div class="auth-form-panel">

                        <a href="index.php"
                           class="auth-brand text-decoration-none">
                            STOCK<span>MIND</span>
                        </a>

                        <h1 class="auth-title mt-5">
                            مرحبًا بعودتك
                        </h1>

                        <p class="auth-description">
                            سجّل الدخول للوصول إلى لوحة
                            التحكم وإدارة مخزون شركتك.
                        </p>

                        <form action="#" method="post">

                            <!-- Email -->
                            <div class="mb-3">

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

                            <!-- Password -->
                            <div class="mb-3">

                                <label for="password"
                                       class="form-label">
                                    كلمة المرور
                                </label>

                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                    class="form-control"
                                    placeholder="أدخل كلمة المرور"
                                    autocomplete="current-password"
                                    required
                                >

                            </div>

                            <!-- Remember Me -->
                            <div class="form-check mb-4">

                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    id="rememberMe"
                                >

                                <label class="form-check-label"
                                       for="rememberMe">
                                    تذكرني
                                </label>

                            </div>

                            <!-- Submit -->
                            <button type="submit"
                                    class="btn btn-primary w-100 auth-submit">
                                تسجيل الدخول
                            </button>

                        </form>

                        <p class="auth-bottom-text text-center mt-4">

                            ليس لديك حساب؟

                            <a href="register.php">
                                أنشئ حساب شركة
                            </a>

                        </p>

                        <a href="index.php"
                           class="auth-back-link">
                            العودة إلى الصفحة الرئيسية
                        </a>

                    </div>

                </div>

                <!-- Information Panel -->
                <div class="col-lg-6 d-none d-lg-flex">

                    <div class="auth-info-panel">

                        <div class="auth-info-content">

                            <div class="auth-info-icon">
                                📦
                            </div>

                            <h2>
                                تحكم بمخزونك من مكان واحد
                            </h2>

                            <p>
                                مع STOCKMIND يمكنك إدارة
                                المستودعات وقطع الغيار
                                والموردين والمشتريات
                                من منصة واحدة.
                            </p>

                            <div class="row g-3 mt-4">

                                <div class="col-6">
                                    <div class="auth-stat">
                                        <h3>6</h3>
                                        <span>مستودعات</span>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="auth-stat">
                                        <h3>2,450</h3>
                                        <span>قطعة غيار</span>
                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>

                </div>

            </div>

        </div>

    </main>

</body>
</html>
