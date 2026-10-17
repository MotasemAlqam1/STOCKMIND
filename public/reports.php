
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>التقارير والتحليلات | STOCKMIND</title>

    <!-- Bootstrap 5 RTL -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
    >

    <!-- Shared CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>

<body class="dashboard-page">

    <div class="container-fluid">
        <div class="row">

            <!-- ==============================
                 SIDEBAR
            =============================== -->
            <aside class="col-12 col-lg-3 col-xl-2 dashboard-sidebar">

                <a href="dashboard.php"
                   class="dashboard-brand text-decoration-none">
                    STOCK<span>MIND</span>
                </a>

                <p class="sidebar-label">القائمة الرئيسية</p>

                <nav aria-label="القائمة الرئيسية للوحة التحكم">

                    <ul class="sidebar-menu list-unstyled">

                        <li>
                            <a href="dashboard.php" class="sidebar-link">
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
                            <a href="stock-movements.php"
                               class="sidebar-link">
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
                            <a href="purchase-orders.php"
                               class="sidebar-link">
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
                            <a href="reports.php"
                               class="sidebar-link active"
                               aria-current="page">
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

            <!-- ==============================
                 MAIN CONTENT
            =============================== -->
            <main class="col-12 col-lg-9 col-xl-10 dashboard-main">

                <!-- Topbar -->
                <header class="dashboard-topbar">

                    <div>
                        <h1 class="dashboard-title">
                            التقارير والتحليلات
                        </h1>

                        <p class="dashboard-subtitle mb-0">
                            متابعة حالة المخزون وأداء المستودعات
                        </p>
                    </div>

                    <div class="dashboard-user">

                        <span class="demo-label">Demo Mode</span>

                        <div class="user-avatar" aria-hidden="true">
                            M
                        </div>

                        <div class="user-details d-none d-sm-block">
                            <strong>مدير الشركة</strong>
                            <small>Manager</small>
                        </div>

                    </div>

                </header>

                <div class="dashboard-content">

                    <!-- ==============================
                         WELCOME
                    =============================== -->
                    <section class="dashboard-welcome mb-4">

                        <h2>تقارير مخزون STOCKMIND</h2>

                        <p class="mb-0">
                            حلّل حالة قطع الغيار وتوزيعها
                            على المستودعات، وتعرّف على الأصناف
                            التي تحتاج إلى متابعة.
                        </p>

                    </section>

                    <!-- ==============================
                         REPORT FILTERS
                    =============================== -->
                    <section class="dashboard-panel mb-4"
                             aria-labelledby="reportFiltersTitle">

                        <div class="panel-heading">
                            <div>
                                <h2 id="reportFiltersTitle">
                                    إعدادات التقرير
                                </h2>
                                <p>خيارات العرض التجريبية</p>
                            </div>

                            <span class="badge text-bg-light">
                                Static Preview
                            </span>
                        </div>

                        <div class="row g-3">

                            <div class="col-12 col-md-4">
                                <label for="reportPeriod"
                                       class="form-label">
                                    الفترة الزمنية
                                </label>

                                <select id="reportPeriod"
                                        class="form-select">
                                    <option>آخر 30 يومًا</option>
                                    <option>آخر 7 أيام</option>
                                    <option>آخر 90 يومًا</option>
                                    <option>هذا العام</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-4">
                                <label for="reportWarehouse"
                                       class="form-label">
                                    المستودع
                                </label>

                                <select id="reportWarehouse"
                                        class="form-select">
                                    <option>جميع المستودعات</option>
                                    <option>المستودع الرئيسي</option>
                                    <option>مستودع عمّان</option>
                                    <option>مستودع الزرقاء</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-4">
                                <label for="reportType"
                                       class="form-label">
                                    نوع التقرير
                                </label>

                                <select id="reportType"
                                        class="form-select">
                                    <option>ملخص المخزون</option>
                                    <option>المخزون المنخفض</option>
                                    <option>الأصناف بطيئة الحركة</option>
                                    <option>حركات المخزون</option>
                                </select>
                            </div>

                        </div>

                        <p class="inventory-helper-text mt-3 mb-0">
                            الفلاتر شكلية حاليًا، ولا تغيّر
                            البيانات المعروضة.
                        </p>

                    </section>

                    <!-- ==============================
                         KPI CARDS
                    =============================== -->
                    <section class="mb-4"
                             aria-labelledby="reportsStatsTitle">

                        <h2 id="reportsStatsTitle"
                            class="content-heading">
                            نظرة عامة على المخزون
                        </h2>

                        <div class="row g-3">

                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">

                                    <div class="stat-icon blue-icon"
                                         aria-hidden="true">📦</div>

                                    <p>إجمالي الأصناف</p>
                                    <h3>2,450</h3>
                                    <small>SKU مسجل</small>

                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">

                                    <div class="stat-icon green-icon"
                                         aria-hidden="true">✓</div>

                                    <p>أصناف متوفرة</p>
                                    <h3>2,390</h3>
                                    <small>حالة المخزون طبيعية</small>

                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">

                                    <div class="stat-icon orange-icon"
                                         aria-hidden="true">⚠</div>

                                    <p>مخزون منخفض</p>
                                    <h3>42</h3>
                                    <small>صنف بحاجة إلى متابعة</small>

                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">

                                    <div class="stat-icon purple-icon"
                                         aria-hidden="true">🚫</div>

                                    <p>نفد المخزون</p>
                                    <h3>18</h3>
                                    <small>صنف غير متوفر</small>

                                </div>
                            </div>

                        </div>

                    </section>

                    <!-- ==============================
                         VISUAL REPORTS
                    =============================== -->
                    <div class="row g-4 mb-4">

                        <!-- Warehouse Distribution -->
                        <div class="col-12 col-xl-7">

                            <section class="dashboard-panel h-100"
                                     aria-labelledby="distributionTitle">

                                <div class="panel-heading">
                                    <div>
                                        <h2 id="distributionTitle">
                                            توزيع المخزون على المستودعات
                                        </h2>
                                        <p>
                                            عدد الوحدات في العينة التجريبية
                                        </p>
                                    </div>
                                </div>

                                <!-- Warehouse 1 -->
                                <div class="report-progress-item">

                                    <div class="report-progress-label">
                                        <span>المستودع الرئيسي</span>
                                        <strong>1,250 وحدة</strong>
                                    </div>

                                    <div class="progress"
                                         role="progressbar"
                                         aria-label="المستودع الرئيسي"
                                         aria-valuenow="1250"
                                         aria-valuemin="0"
                                         aria-valuemax="2450">

                                        <div class="progress-bar"
                                             style="width: 51.02%">
                                        </div>
                                    </div>

                                </div>

                                <!-- Warehouse 2 -->
                                <div class="report-progress-item">

                                    <div class="report-progress-label">
                                        <span>مستودع عمّان</span>
                                        <strong>850 وحدة</strong>
                                    </div>

                                    <div class="progress"
                                         role="progressbar"
                                         aria-label="مستودع عمّان"
                                         aria-valuenow="850"
                                         aria-valuemin="0"
                                         aria-valuemax="2450">

                                        <div class="progress-bar"
                                             style="width: 34.69%">
                                        </div>
                                    </div>

                                </div>

                                <!-- Warehouse 3 -->
                                <div class="report-progress-item">

                                    <div class="report-progress-label">
                                        <span>مستودع الزرقاء</span>
                                        <strong>350 وحدة</strong>
                                    </div>

                                    <div class="progress"
                                         role="progressbar"
                                         aria-label="مستودع الزرقاء"
                                         aria-valuenow="350"
                                         aria-valuemin="0"
                                         aria-valuemax="2450">

                                        <div class="progress-bar"
                                             style="width: 14.29%">
                                        </div>
                                    </div>

                                </div>

                                <p class="inventory-helper-text mt-4 mb-0">
                                    إجمالي العينة: 2,450 وحدة.
                                    هذا مثال مستقل لتوزيع الكميات،
                                    وليس إجمالي عدد SKUs.
                                </p>

                            </section>

                        </div>

                        <!-- Inventory Health -->
                        <div class="col-12 col-xl-5">

                            <section class="dashboard-panel h-100"
                                     aria-labelledby="healthTitle">

                                <div class="panel-heading">
                                    <div>
                                        <h2 id="healthTitle">
                                            صحة المخزون
                                        </h2>
                                        <p>توزيع حالات الأصناف المسجلة</p>
                                    </div>
                                </div>

                                <div class="report-health-total">
                                    <strong>2,450</strong>
                                    <span>إجمالي الأصناف</span>
                                </div>

                                <div class="progress report-health-progress"
                                     aria-label="توزيع حالات المخزون">

                                    <div class="progress-bar bg-success"
                                         style="width: 97.55%"
                                         title="متوفر: 2390">
                                    </div>

                                    <div class="progress-bar bg-warning"
                                         style="width: 1.71%"
                                         title="مخزون منخفض: 42">
                                    </div>

                                    <div class="progress-bar bg-danger"
                                         style="width: 0.74%"
                                         title="نفد المخزون: 18">
                                    </div>

                                </div>

                                <div class="report-legend mt-4">

                                    <div>
                                        <span class="report-dot bg-success"></span>
                                        <span>متوفر</span>
                                        <strong>2,390</strong>
                                    </div>

                                    <div>
                                        <span class="report-dot bg-warning"></span>
                                        <span>منخفض</span>
                                        <strong>42</strong>
                                    </div>

                                    <div>
                                        <span class="report-dot bg-danger"></span>
                                        <span>نافد</span>
                                        <strong>18</strong>
                                    </div>

                                </div>

                            </section>

                        </div>

                    </div>

                    <!-- ==============================
                         LOW STOCK REPORT
                    =============================== -->
                    <section class="dashboard-panel mb-4"
                             aria-labelledby="lowStockReportTitle">

                        <div class="panel-heading">
                            <div>
                                <h2 id="lowStockReportTitle">
                                    تقرير المخزون المنخفض والنافد
                                </h2>

                                <p>
                                    أمثلة لأصناف تحتاج إلى متابعة
                                </p>
                            </div>

                            <span class="badge text-bg-warning">
                                Requires Attention
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
                                        <th scope="col">الحد الأدنى</th>
                                        <th scope="col">الحالة</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td><strong>SM-1002</strong></td>
                                        <td>Oil Filter</td>
                                        <td>مستودع عمّان</td>
                                        <td>8</td>
                                        <td>20</td>
                                        <td>
                                            <span class="badge text-bg-warning">
                                                منخفض
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><strong>SM-1004</strong></td>
                                        <td>Spark Plug</td>
                                        <td>مستودع الزرقاء</td>
                                        <td>0</td>
                                        <td>15</td>
                                        <td>
                                            <span class="badge text-bg-danger">
                                                نافد
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><strong>SM-1010</strong></td>
                                        <td>Fuel Pump</td>
                                        <td>المستودع الرئيسي</td>
                                        <td>4</td>
                                        <td>12</td>
                                        <td>
                                            <span class="badge text-bg-warning">
                                                منخفض
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><strong>SM-1012</strong></td>
                                        <td>Radiator Hose</td>
                                        <td>مستودع عمّان</td>
                                        <td>0</td>
                                        <td>10</td>
                                        <td>
                                            <span class="badge text-bg-danger">
                                                نافد
                                            </span>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>

                    </section>

                    <!-- ==============================
                         SLOW MOVING INVENTORY
                    =============================== -->
                    <section class="dashboard-panel"
                             aria-labelledby="slowMovingTitle">

                        <div class="panel-heading">
                            <div>
                                <h2 id="slowMovingTitle">
                                    الأصناف بطيئة الحركة
                                </h2>

                                <p>
                                    مثال توضيحي لأصناف ذات طلب منخفض
                                    خلال آخر 90 يومًا
                                </p>
                            </div>
                        </div>

                        <div class="table-responsive">

                            <table class="table dashboard-table align-middle">

                                <thead>
                                    <tr>
                                        <th scope="col">SKU</th>
                                        <th scope="col">اسم القطعة</th>
                                        <th scope="col">الرصيد الحالي</th>
                                        <th scope="col">الكمية المصروفة / 90 يوم</th>
                                        <th scope="col">التصنيف التجريبي</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td><strong>SM-1020</strong></td>
                                        <td>Clutch Plate</td>
                                        <td>75</td>
                                        <td>2</td>
                                        <td>
                                            <span class="badge text-bg-warning">
                                                بطيء الحركة
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><strong>SM-1021</strong></td>
                                        <td>Alternator Belt</td>
                                        <td>40</td>
                                        <td>1</td>
                                        <td>
                                            <span class="badge text-bg-warning">
                                                بطيء الحركة
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><strong>SM-1022</strong></td>
                                        <td>Door Handle</td>
                                        <td>30</td>
                                        <td>0</td>
                                        <td>
                                            <span class="badge text-bg-secondary">
                                                بلا حركة في الفترة
                                            </span>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>

                        <div class="alert alert-info mt-3 mb-0"
                             role="note">
                            يعتمد تحديد Slow-Moving Inventory فعليًا
                            على بيانات الحركات وفترة التحليل
                            ومعايير العمل، وليس على عدد الوحدات
                            المتوفرة وحده.
                        </div>

                    </section>

                    <p class="dashboard-disclaimer mt-4">
                        جميع التقارير والأرقام تجريبية.
                        لا يوجد تحليل بيانات أو تصدير فعلي حاليًا.
                    </p>

                </div>

            </main>
        </div>
    </div>

</body>
</html>
