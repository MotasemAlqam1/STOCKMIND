
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>حركات المخزون | STOCKMIND</title>

    <!-- Bootstrap 5 RTL -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css">

    <!-- Shared Styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>

<body class="dashboard-page">

    <div class="container-fluid">
        <div class="row">

            <!-- =================================
                 SIDEBAR
            ================================== -->
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
                               class="sidebar-link active"
                               aria-current="page">
                                <span aria-hidden="true">↔</span>
                                حركات المخزون
                            </a>
                        </li>

                        <li>
                            <span class="sidebar-link sidebar-disabled">
                                <span aria-hidden="true">♧</span>
                                الموردون
                            </span>
                        </li>

                        <li>
                            <span class="sidebar-link sidebar-disabled">
                                <span aria-hidden="true">▧</span>
                                طلبات الشراء
                            </span>
                        </li>

                        <li>
                            <span class="sidebar-link sidebar-disabled">
                                <span aria-hidden="true">↧</span>
                                الشحنات
                            </span>
                        </li>

                        <li>
                            <span class="sidebar-link sidebar-disabled">
                                <span aria-hidden="true">▥</span>
                                التقارير
                            </span>
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

            <!-- =================================
                 MAIN CONTENT
            ================================== -->
            <main class="col-12 col-lg-9 col-xl-10 dashboard-main">

                <!-- Topbar -->
                <header class="dashboard-topbar">

                    <div>
                        <h1 class="dashboard-title">
                            حركات المخزون
                        </h1>

                        <p class="dashboard-subtitle mb-0">
                            تتبع حركة قطع الغيار بين المستودعات والرفوف
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

                    <!-- =================================
                         WELCOME
                    ================================== -->
                    <section class="dashboard-welcome mb-4">

                        <h2>سجل حركة المخزون</h2>

                        <p class="mb-0">
                            راقب عمليات الاستلام والصرف والنقل
                            وتسويات المخزون في جميع مستودعات شركتك.
                        </p>

                    </section>

                    <!-- =================================
                         STATISTICS
                    ================================== -->
                    <section class="mb-4"
                             aria-labelledby="movementsStatsTitle">

                        <h2 id="movementsStatsTitle"
                            class="content-heading">
                            ملخص الحركات
                        </h2>

                        <div class="row g-3">

                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">
                                    <div class="stat-icon blue-icon"
                                         aria-hidden="true">↔</div>

                                    <p>إجمالي الحركات</p>
                                    <h3>128</h3>
                                    <small>جميع أنواع الحركات</small>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">
                                    <div class="stat-icon green-icon"
                                         aria-hidden="true">↓</div>

                                    <p>حركات الوارد</p>
                                    <h3>74</h3>
                                    <small>عمليات إضافة مخزون</small>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">
                                    <div class="stat-icon orange-icon"
                                         aria-hidden="true">↑</div>

                                    <p>حركات الصرف</p>
                                    <h3>32</h3>
                                    <small>عمليات خروج مخزون</small>
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 col-xl-3">
                                <div class="dashboard-stat-card">
                                    <div class="stat-icon purple-icon"
                                         aria-hidden="true">⇄</div>

                                    <p>النقل والتسويات</p>
                                    <h3>22</h3>
                                    <small>نقل بين المواقع أو تسوية</small>
                                </div>
                            </div>

                        </div>

                    </section>

                    <!-- =================================
                         MOVEMENTS TABLE
                    ================================== -->
                    <section class="dashboard-panel mb-4"
                             aria-labelledby="movementsTableTitle">

                        <div class="panel-heading">

                            <div>
                                <h2 id="movementsTableTitle">
                                    سجل حركات المخزون
                                </h2>
                                <p>حركات تجريبية توضح عمليات النظام</p>
                            </div>

                            <a href="#add-movement"
                               class="btn btn-primary btn-sm">
                                + حركة جديدة
                            </a>

                        </div>

                        <!-- Filters - Static UI -->
                        <div class="row g-3 mb-4">

                            <div class="col-12 col-md-6">

                                <label for="movementSearch"
                                       class="form-label">
                                    البحث
                                </label>

                                <input
                                    type="search"
                                    id="movementSearch"
                                    class="form-control"
                                    placeholder="رقم الحركة أو SKU أو اسم القطعة"
                                >
                            </div>

                            <div class="col-12 col-md-3">

                                <label for="movementTypeFilter"
                                       class="form-label">
                                    نوع الحركة
                                </label>

                                <select id="movementTypeFilter"
                                        class="form-select">

                                    <option>جميع الحركات</option>
                                    <option>وارد</option>
                                    <option>صرف</option>
                                    <option>نقل</option>
                                    <option>تسوية</option>

                                </select>
                            </div>

                            <div class="col-12 col-md-3">

                                <label for="movementStatusFilter"
                                       class="form-label">
                                    الحالة
                                </label>

                                <select id="movementStatusFilter"
                                        class="form-select">

                                    <option>جميع الحالات</option>
                                    <option>مؤكد</option>
                                    <option>قيد المراجعة</option>

                                </select>
                            </div>

                        </div>

                        <!-- Table -->
                        <div class="table-responsive">

                            <table class="table dashboard-table align-middle">

                                <thead>
                                    <tr>
                                        <th scope="col">رقم الحركة</th>
                                        <th scope="col">التاريخ</th>
                                        <th scope="col">القطعة / SKU</th>
                                        <th scope="col">النوع</th>
                                        <th scope="col">الكمية</th>
                                        <th scope="col">المصدر</th>
                                        <th scope="col">الوجهة</th>
                                        <th scope="col">الحالة</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <!-- Incoming -->
                                    <tr>
                                        <td><strong>MOV-1001</strong></td>
                                        <td>2026-10-15</td>
                                        <td>
                                            Brake Pads
                                            <small class="d-block text-muted">
                                                SM-1001
                                            </small>
                                        </td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                وارد
                                            </span>
                                        </td>
                                        <td>50</td>
                                        <td>استلام شحنة</td>
                                        <td>الرئيسي / رف A1</td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                مؤكد
                                            </span>
                                        </td>
                                    </tr>

                                    <!-- Outgoing -->
                                    <tr>
                                        <td><strong>MOV-1002</strong></td>
                                        <td>2026-10-15</td>
                                        <td>
                                            Oil Filter
                                            <small class="d-block text-muted">
                                                SM-1002
                                            </small>
                                        </td>
                                        <td>
                                            <span class="badge text-bg-danger">
                                                صرف
                                            </span>
                                        </td>
                                        <td>12</td>
                                        <td>عمّان / رف B2</td>
                                        <td>طلب صرف</td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                مؤكد
                                            </span>
                                        </td>
                                    </tr>

                                    <!-- Transfer -->
                                    <tr>
                                        <td><strong>MOV-1003</strong></td>
                                        <td>2026-10-16</td>
                                        <td>
                                            Air Filter
                                            <small class="d-block text-muted">
                                                SM-1003
                                            </small>
                                        </td>
                                        <td>
                                            <span class="badge text-bg-primary">
                                                نقل
                                            </span>
                                        </td>
                                        <td>20</td>
                                        <td>الرئيسي / رف A3</td>
                                        <td>الزرقاء / رف C1</td>
                                        <td>
                                            <span class="badge text-bg-warning">
                                                قيد المراجعة
                                            </span>
                                        </td>
                                    </tr>

                                    <!-- Adjustment -->
                                    <tr>
                                        <td><strong>MOV-1004</strong></td>
                                        <td>2026-10-16</td>
                                        <td>
                                            Spark Plug
                                            <small class="d-block text-muted">
                                                SM-1004
                                            </small>
                                        </td>
                                        <td>
                                            <span class="badge text-bg-secondary">
                                                تسوية
                                            </span>
                                        </td>
                                        <td>5</td>
                                        <td>الزرقاء / رف C2</td>
                                        <td>تسوية نقص جرد</td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                مؤكد
                                            </span>
                                        </td>
                                    </tr>

                                    <!-- Incoming Pending -->
                                    <tr>
                                        <td><strong>MOV-1005</strong></td>
                                        <td>2026-10-17</td>
                                        <td>
                                            Brake Pads - Aftermarket
                                            <small class="d-block text-muted">
                                                SM-1005
                                            </small>
                                        </td>
                                        <td>
                                            <span class="badge text-bg-success">
                                                وارد
                                            </span>
                                        </td>
                                        <td>30</td>
                                        <td>شحنة قيد الفحص</td>
                                        <td>الرئيسي / رف A2</td>
                                        <td>
                                            <span class="badge text-bg-warning">
                                                قيد المراجعة
                                            </span>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                        <p class="inventory-helper-text mt-3 mb-0">
                            جميع الكميات موجبة. نوع الحركة يحدد
                            اتجاه التغيير، والحركات غير المؤكدة
                            لا تُحدّث المخزون.
                        </p>

                    </section>

                    <!-- =================================
                         CREATE MOVEMENT FORM
                    ================================== -->
                    <section id="add-movement"
                             class="dashboard-panel"
                             aria-labelledby="addMovementTitle">

                        <div class="panel-heading">
                            <div>
                                <h2 id="addMovementTitle">
                                    تسجيل حركة مخزون
                                </h2>
                                <p>
                                    نموذج تجريبي لإنشاء حركة جديدة
                                </p>
                            </div>
                        </div>

                        <form>

                            <div class="row g-3">

                                <!-- Part -->
                                <div class="col-12 col-md-6">
                                    <label for="movementPart"
                                           class="form-label">
                                        قطعة الغيار
                                    </label>

                                    <select id="movementPart"
                                            name="part_id"
                                            class="form-select"
                                            required>

                                        <option value="" selected disabled>
                                            اختر قطعة الغيار
                                        </option>
                                        <option value="1001">
                                            SM-1001 — Brake Pads
                                        </option>
                                        <option value="1002">
                                            SM-1002 — Oil Filter
                                        </option>
                                        <option value="1003">
                                            SM-1003 — Air Filter
                                        </option>
                                        <option value="1004">
                                            SM-1004 — Spark Plug
                                        </option>
                                    </select>
                                </div>

                                <!-- Movement Type -->
                                <div class="col-12 col-md-6">
                                    <label for="movementType"
                                           class="form-label">
                                        نوع الحركة
                                    </label>

                                    <select id="movementType"
                                            name="movement_type"
                                            class="form-select"
                                            required>

                                        <option value="" selected disabled>
                                            اختر نوع الحركة
                                        </option>
                                        <option value="IN">وارد</option>
                                        <option value="OUT">صرف</option>
                                        <option value="TRANSFER">نقل</option>
                                        <option value="ADJUSTMENT">تسوية</option>
                                    </select>
                                </div>

                                <!-- Quantity -->
                                <div class="col-12 col-md-6">
                                    <label for="movementQuantity"
                                           class="form-label">
                                        الكمية
                                    </label>

                                    <input
                                        type="number"
                                        id="movementQuantity"
                                        name="quantity"
                                        class="form-control"
                                        min="1"
                                        step="1"
                                        placeholder="مثال: 20"
                                        required
                                    >

                                    <div class="form-text">
                                        أدخل رقمًا موجبًا فقط.
                                    </div>
                                </div>

                                <!-- Reference -->
                                <div class="col-12 col-md-6">
                                    <label for="movementReference"
                                           class="form-label">
                                        رقم المرجع
                                    </label>

                                    <input
                                        type="text"
                                        id="movementReference"
                                        name="reference_number"
                                        class="form-control"
                                        placeholder="مثال: REC-1001"
                                    >
                                </div>

                                <!-- Source Warehouse -->
                                <div class="col-12 col-md-6">
                                    <label for="sourceWarehouse"
                                           class="form-label">
                                        المستودع المصدر
                                    </label>

                                    <select id="sourceWarehouse"
                                            name="source_warehouse"
                                            class="form-select">

                                        <option value="">
                                            لا يوجد / غير مطلوب
                                        </option>
                                        <option value="1">
                                            المستودع الرئيسي
                                        </option>
                                        <option value="2">
                                            مستودع الزرقاء
                                        </option>
                                        <option value="3">
                                            مستودع عمّان
                                        </option>
                                    </select>
                                </div>

                                <!-- Source Shelf -->
                                <div class="col-12 col-md-6">
                                    <label for="sourceShelf"
                                           class="form-label">
                                        الرف المصدر
                                    </label>

                                    <input
                                        type="text"
                                        id="sourceShelf"
                                        name="source_shelf"
                                        class="form-control"
                                        placeholder="مثال: A1"
                                    >
                                </div>

                                <!-- Destination Warehouse -->
                                <div class="col-12 col-md-6">
                                    <label for="destinationWarehouse"
                                           class="form-label">
                                        المستودع الوجهة
                                    </label>

                                    <select id="destinationWarehouse"
                                            name="destination_warehouse"
                                            class="form-select">

                                        <option value="">
                                            لا يوجد / غير مطلوب
                                        </option>
                                        <option value="1">
                                            المستودع الرئيسي
                                        </option>
                                        <option value="2">
                                            مستودع الزرقاء
                                        </option>
                                        <option value="3">
                                            مستودع عمّان
                                        </option>
                                    </select>
                                </div>

                                <!-- Destination Shelf -->
                                <div class="col-12 col-md-6">
                                    <label for="destinationShelf"
                                           class="form-label">
                                        الرف الوجهة
                                    </label>

                                    <input
                                        type="text"
                                        id="destinationShelf"
                                        name="destination_shelf"
                                        class="form-control"
                                        placeholder="مثال: B3"
                                    >
                                </div>

                                <!-- Date -->
                                <div class="col-12 col-md-6">
                                    <label for="movementDate"
                                           class="form-label">
                                        تاريخ الحركة
                                    </label>

                                    <input
                                        type="date"
                                        id="movementDate"
                                        name="movement_date"
                                        class="form-control"
                                        required
                                    >
                                </div>

                                <!-- Adjustment Direction -->
                                <div class="col-12 col-md-6">
                                    <label for="adjustmentDirection"
                                           class="form-label">
                                        اتجاه التسوية
                                    </label>

                                    <select id="adjustmentDirection"
                                            name="adjustment_direction"
                                            class="form-select">

                                        <option value="">
                                            ليس حركة تسوية
                                        </option>
                                        <option value="increase">
                                            زيادة المخزون
                                        </option>
                                        <option value="decrease">
                                            تقليل المخزون
                                        </option>
                                    </select>

                                    <div class="form-text">
                                        يُستخدم فقط مع نوع تسوية.
                                    </div>
                                </div>

                                <!-- Notes -->
                                <div class="col-12">
                                    <label for="movementNotes"
                                           class="form-label">
                                        ملاحظات
                                    </label>

                                    <textarea
                                        id="movementNotes"
                                        name="notes"
                                        class="form-control"
                                        rows="3"
                                        placeholder="سبب الحركة أو تفاصيل إضافية"
                                    ></textarea>
                                </div>

                            </div>

                            <div class="alert alert-info mt-4" role="note">
                                هذه واجهة توضيحية فقط. في النظام
                                الفعلي سنحدد الحقول المطلوبة
                                بحسب نوع الحركة، ونتحقق من
                                المستودعات والرفوف والكميات،
                                ولن يتم تغيير المخزون إلا
                                بعد التأكيد.
                            </div>

                            <button type="button"
                                    class="btn btn-primary">
                                تسجيل الحركة (عرض فقط)
                            </button>

                        </form>

                    </section>

                    <p class="dashboard-disclaimer mt-4">
                        جميع بيانات الحركات تجريبية.
                        البحث والفلاتر وتسجيل الحركة
                        ليست وظائف مفعلة بعد.
                    </p>

                </div>

            </main>

        </div>
    </div>

</body>
</html>
