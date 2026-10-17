<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>إدارة المستودعات | STOCKMIND</title>

    <!-- Bootstrap 5 RTL -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Dashboard CSS -->
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>

<body class="dashboard-page">

    <div class="container-fluid">
        <div class="row">

            <!-- =============== SIDEBAR =============== -->
            <aside class="col-12 col-lg-3 col-xl-2 dashboard-sidebar">

                <a href="dashboard.php" class="dashboard-brand text-decoration-none">
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
                            <a href="warehouses.php" class="sidebar-link active" aria-current="page">
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

            <!-- =============== MAIN CONTENT =============== -->
            <main class="col-12 col-lg-9 col-xl-10 dashboard-main">

                <!-- Topbar -->
                <header class="dashboard-topbar">

                    <div>
                        <h1 class="dashboard-title">
                            إدارة المستودعات
                        </h1>

                        <p class="dashboard-subtitle mb-0">
                            إدارة المستودعات ومواقع التخزين التابعة لشركتك
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

                    <!-- Introduction -->
                    <section class="dashboard-welcome mb-4">

                        <h2>مستودعات شركتك</h2>

                        <p class="mb-0">
                            نظّم المستودعات ومواقع التخزين،
                            وتابع حالة كل مستودع من مكان واحد.
                        </p>

                    </section>

                    <!-- =============== STATISTICS =============== -->
                    <section class="mb-4" aria-labelledby="warehouseStatsTitle">

                        <h2 id="warehouseStatsTitle" class="content-heading">
                            ملخص المستودعات
                        </h2>

                        <div class="row g-3">

                            <!-- Total -->
                            <div class="col-12 col-md-4">
                                <div class="dashboard-stat-card">

                                    <div class="stat-icon blue-icon" aria-hidden="true">🏬</div>

                                    <p>إجمالي المستودعات</p>
                                    <h3>6</h3>
                                    <small>مستودعات مسجلة</small>

                                </div>
                            </div>

                            <!-- Active -->
                            <div class="col-12 col-md-4">
                                <div class="dashboard-stat-card">

                                    <div class="stat-icon green-icon" aria-hidden="true">✓</div>

                                    <p>مستودعات نشطة</p>
                                    <h3>4</h3>
                                    <small>تعمل بشكل طبيعي</small>

                                </div>
                            </div>

                            <!-- Attention -->
                            <div class="col-12 col-md-4">
                                <div class="dashboard-stat-card">

                                    <div class="stat-icon orange-icon" aria-hidden="true">⚠</div>

                                    <p>تحتاج إلى متابعة</p>
                                    <h3>2</h3>
                                    <small>قيد الصيانة أو التجهيز</small>

                                </div>
                            </div>

                        </div>

                    </section>

                    <!-- =============== WAREHOUSE TABLE =============== -->
                    <section class="dashboard-panel mb-4" aria-labelledby="warehouseListTitle">

                        <div class="panel-heading">

                            <div>
                                <h2 id="warehouseListTitle">
                                    قائمة المستودعات
                                </h2>

                                <p>
                                    عرض المستودعات المسجلة في الشركة
                                </p>
                            </div>

                            <span class="badge text-bg-light">
                                6 مستودعات
                            </span>

                        </div>

                        <div class="table-responsive">

                            <table class="table dashboard-table align-middle">

                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">اسم المستودع</th>
                                        <th scope="col">المدينة</th>
                                        <th scope="col">عدد الرفوف</th>
                                        <th scope="col">الحالة</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td>1</td>
                                        <td>المستودع الرئيسي</td>
                                        <td>عمّان</td>
                                        <td>24</td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                نشط
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>مستودع الزرقاء</td>
                                        <td>الزرقاء</td>
                                        <td>16</td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                نشط
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>مستودع العقبة</td>
                                        <td>العقبة</td>
                                        <td>12</td>
                                        <td>
                                            <span class="badge text-bg-warning">
                                                صيانة
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>مستودع إربد</td>
                                        <td>إربد</td>
                                        <td>18</td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                نشط
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>مستودع سحاب</td>
                                        <td>عمّان</td>
                                        <td>20</td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                نشط
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>مستودع احتياطي</td>
                                        <td>عمّان</td>
                                        <td>8</td>
                                        <td>
                                            <span class="badge text-bg-secondary">
                                                قيد التجهيز
                                            </span>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </section>

                    <!-- =============== ADD WAREHOUSE FORM =============== -->
                    <section class="dashboard-panel" aria-labelledby="addWarehouseTitle">

                        <div class="panel-heading">
                            <div>
                                <h2 id="addWarehouseTitle">
                                    إضافة مستودع جديد
                                </h2>

                                <p>
                                    نموذج توضيحي لبيانات المستودع
                                </p>
                            </div>
                        </div>

                        <form>

                            <div class="row g-3">

                                <!-- Name -->
                                <div class="col-12 col-md-6">

                                    <label for="warehouseName" class="form-label">
                                        اسم المستودع
                                    </label>

                                    <input type="text" id="warehouseName" name="warehouse_name" class="form-control"
                                        placeholder="مثال: المستودع الرئيسي" required>

                                </div>

                                <!-- City -->
                                <div class="col-12 col-md-6">

                                    <label for="warehouseCity" class="form-label">
                                        المدينة
                                    </label>

                                    <input type="text" id="warehouseCity" name="city" class="form-control"
                                        placeholder="مثال: عمّان" required>

                                </div>

                                <!-- Address -->
                                <div class="col-12">

                                    <label for="warehouseAddress" class="form-label">
                                        عنوان المستودع
                                    </label>

                                    <input type="text" id="warehouseAddress" name="address" class="form-control"
                                        placeholder="المنطقة، الشارع، تفاصيل الموقع">

                                </div>

                                <!-- Status -->
                                <div class="col-12 col-md-6">

                                    <label for="warehouseStatus" class="form-label">
                                        حالة المستودع
                                    </label>

                                    <select id="warehouseStatus" name="status" class="form-select">

                                        <option value="active">
                                            نشط
                                        </option>

                                        <option value="maintenance">
                                            صيانة
                                        </option>

                                        <option value="preparing">
                                            قيد التجهيز
                                        </option>

                                    </select>

                                </div>

                            </div>

                            <div class="mt-4">

                                <button type="button" class="btn btn-primary">
                                    حفظ المستودع (عرض فقط)
                                </button>

                            </div>

                        </form>

                    </section>

                    <p class="dashboard-disclaimer mt-4">
                        جميع البيانات تجريبية لأغراض العرض.
                        عمليات الإضافة والتعديل والحذف غير مفعلة حاليًا.
                    </p>

                </div>

            </main>

        </div>
    </div>

</body>

</html>