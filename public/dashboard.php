<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>لوحة التحكم | STOCKMIND</title>

    <!-- Bootstrap 5 RTL -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

    <!-- Global Styles -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Dashboard Styles -->
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>

<body class="dashboard-page">

    <div class="container-fluid">

        <div class="row">

            <!-- ============================ -->
            <!-- Sidebar -->
            <!-- ============================ -->

            <aside class="col-12 col-lg-3 col-xl-2 dashboard-sidebar">

                <a href="dashboard.php" class="dashboard-brand text-decoration-none">
                    STOCK<span>MIND</span>
                </a>

                <p class="sidebar-label">القائمة الرئيسية</p>

                <nav aria-label="القائمة الرئيسية للوحة التحكم">

                    <ul class="sidebar-menu list-unstyled">

                        <li>
                            <a href="dashboard.php" class="sidebar-link active" aria-current="page">
                                <span aria-hidden="true">▦</span>
                                نظرة عامة
                            </a>
                        </li>

                        <li>
                            <a href="warehouses.php" class="sidebar-link">
                                <span aria-hidden="true">▤</span>
                                المستودعات
                            </a>
                        </li>

                        <li>
                            <a href="parts.php" class="sidebar-link">
                                <span aria-hidden="true">▣</span>
                                قطع الغيار
                            </a>
                        </li>

                        <li>
                            <a href="stock-movements.php" class="sidebar-link">
                                <span aria-hidden="true">↔</span>
                                حركات المخزون
                            </a>
                        </li>

                        <li>
                            <a href="suppliers.php" class="sidebar-link">
                                <span aria-hidden="true">♧</span>
                                الموردون
                            </a>
                        </li>

                        <li>
                            <a href="purchase-orders.php" class="sidebar-link">
                                <span aria-hidden="true">▧</span>
                                طلبات الشراء
                            </a>
                        </li>

                        <li>
                            <a href="shipments.php" class="sidebar-link">
                                <span aria-hidden="true">↧</span>
                                الشحنات
                            </a>
                        </li>

                        <li>
                            <a href="reports.php" class="sidebar-link">
                                <span aria-hidden="true">▥</span>
                                التقارير والتحليلات
                            </a>
                        </li>

                    </ul>

                </nav>

                <div class="sidebar-bottom">
                    <a href="index.php" class="sidebar-link">
                        <span aria-hidden="true">⌂</span>
                        العودة إلى الموقع
                    </a>
                </div>

            </aside>

            <!-- ============================ -->
            <!-- Main Content -->
            <!-- ============================ -->

            <main class="col-12 col-lg-9 col-xl-10 dashboard-main">

                <!-- Topbar -->
                <header class="dashboard-topbar">

                    <div>
                        <h1 class="dashboard-title">
                            نظرة عامة
                        </h1>

                        <p class="dashboard-subtitle mb-0">
                            مرحبًا بك في لوحة تحكم STOCKMIND
                        </p>
                    </div>

                    <div class="dashboard-user">

                        <span class="demo-label">
                            Demo Mode
                        </span>

                        <div class="user-avatar" aria-hidden="true">
                            M
                        </div>

                        <div class="user-details d-none d-sm-block">
                            <strong>مدير الشركة</strong>
                            <small>Manager</small>
                        </div>

                    </div>

                </header>

                <!-- Dashboard Content -->
                <div class="dashboard-content">

                    <!-- Welcome -->
                    <div class="dashboard-welcome mb-4">

                        <h2>مرحبًا بك في STOCKMIND</h2>

                        <p class="mb-0">
                            تابع أداء المستودعات وحالة المخزون
                            وطلبات الشراء من مكان واحد.
                        </p>

                    </div>

                    <!-- ============================ -->
                    <!-- KPI Cards -->
                    <!-- ============================ -->

                    <section aria-labelledby="statisticsTitle" class="mb-4">

                        <h2 id="statisticsTitle" class="content-heading">
                            إحصائيات المخزون
                        </h2>

                        <div class="row g-3">

                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">

                                    <div class="stat-icon blue-icon" aria-hidden="true">📦</div>

                                    <p>إجمالي قطع الغيار</p>
                                    <h3>2,450</h3>
                                    <small>صنف مسجل</small>

                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">

                                    <div class="stat-icon green-icon" aria-hidden="true">🏬</div>

                                    <p>المستودعات</p>
                                    <h3>6</h3>
                                    <small>مستودعات مسجلة</small>

                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">

                                    <div class="stat-icon orange-icon" aria-hidden="true">⚠️</div>

                                    <p>مخزون منخفض</p>
                                    <h3>42</h3>
                                    <small>صنف يحتاج إلى متابعة</small>

                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">

                                    <div class="stat-icon purple-icon" aria-hidden="true">🧾</div>

                                    <p>طلبات الشراء</p>
                                    <h3>128</h3>
                                    <small>إجمالي الطلبات</small>

                                </div>
                            </div>

                        </div>

                    </section>

                    <!-- ============================ -->
                    <!-- Inventory Table -->
                    <!-- ============================ -->

                    <section class="dashboard-panel mb-4" aria-labelledby="inventoryTitle">

                        <div class="panel-heading">

                            <div>
                                <h2 id="inventoryTitle">
                                    حالة المخزون
                                </h2>
                                <p>
                                    معاينة لأحدث الأصناف المسجلة
                                </p>
                            </div>

                            <span class="badge text-bg-light">
                                بيانات تجريبية
                            </span>

                        </div>

                        <div class="table-responsive">

                            <table class="table dashboard-table align-middle">

                                <thead>
                                    <tr>
                                        <th scope="col">SKU</th>
                                        <th scope="col">اسم القطعة</th>
                                        <th scope="col">المستودع</th>
                                        <th scope="col">الكمية</th>
                                        <th scope="col">الحالة</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td>SM-1001</td>
                                        <td>Brake Pads</td>
                                        <td>المستودع الرئيسي</td>
                                        <td>120</td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                متوفر
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>SM-1002</td>
                                        <td>Oil Filter</td>
                                        <td>مستودع عمّان</td>
                                        <td>8</td>
                                        <td>
                                            <span class="badge text-bg-warning">
                                                مخزون منخفض
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>SM-1003</td>
                                        <td>Air Filter</td>
                                        <td>المستودع الرئيسي</td>
                                        <td>65</td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                متوفر
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>SM-1004</td>
                                        <td>Spark Plug</td>
                                        <td>مستودع الزرقاء</td>
                                        <td>0</td>
                                        <td>
                                            <span class="badge text-bg-danger">
                                                نفد المخزون
                                            </span>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </section>

                    <!-- ============================ -->
                    <!-- Bottom Panels -->
                    <!-- ============================ -->

                    <div class="row g-4">

                        <div class="col-12 col-xl-6">

                            <section class="dashboard-panel h-100">

                                <div class="panel-heading">
                                    <h2>تنبيهات المخزون</h2>
                                </div>

                                <div class="alert alert-warning mb-3">
                                    Oil Filter — الكمية المتاحة 8 فقط
                                </div>

                                <div class="alert alert-danger mb-0">
                                    Spark Plug — المخزون نفد
                                </div>

                            </section>

                        </div>

                        <div class="col-12 col-xl-6">

                            <section class="dashboard-panel h-100">

                                <div class="panel-heading">
                                    <h2>ملخص المستودعات</h2>
                                </div>

                                <div class="warehouse-summary">

                                    <div>
                                        <span>المستودع الرئيسي</span>
                                        <strong>1,250 قطعة</strong>
                                    </div>

                                    <div>
                                        <span>مستودع عمّان</span>
                                        <strong>850 قطعة</strong>
                                    </div>

                                    <div>
                                        <span>مستودع الزرقاء</span>
                                        <strong>350 قطعة</strong>
                                    </div>

                                </div>

                            </section>

                        </div>

                    </div>


                </div>

            </main>

        </div>

    </div>

</body>

</html>