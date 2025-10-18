<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Control Finanzas · Panel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-slate-100 font-sans antialiased">
        <div class="min-h-screen flex">
            <aside class="w-64 bg-slate-900 text-white flex flex-col">
                <div class="px-6 py-8 text-2xl font-semibold tracking-tight">
                    Control Finanzas
                </div>
                <nav class="flex-1 px-4 space-y-1 text-sm font-medium">
                    <a
                        href="#"
                        class="flex items-center gap-3 rounded-lg px-3 py-3 bg-slate-800 text-white shadow-sm"
                    >
                        <span class="inline-flex h-8 w-8 items-center justify-center rounded-md bg-slate-700 text-lg">🏠</span>
                        Dashboard
                    </a>
                    <a
                        href="#"
                        class="flex items-center gap-3 rounded-lg px-3 py-3 text-slate-200 transition hover:bg-slate-800 hover:text-white"
                    >
                        <span class="inline-flex h-8 w-8 items-center justify-center rounded-md bg-slate-800 text-lg">💳</span>
                        Transacciones
                    </a>
                    <a
                        href="#"
                        class="flex items-center gap-3 rounded-lg px-3 py-3 text-slate-200 transition hover:bg-slate-800 hover:text-white"
                    >
                        <span class="inline-flex h-8 w-8 items-center justify-center rounded-md bg-slate-800 text-lg">📊</span>
                        Presupuestos
                    </a>
                    <a
                        href="#"
                        class="flex items-center gap-3 rounded-lg px-3 py-3 text-slate-200 transition hover:bg-slate-800 hover:text-white"
                    >
                        <span class="inline-flex h-8 w-8 items-center justify-center rounded-md bg-slate-800 text-lg">🎯</span>
                        Metas de ahorro
                    </a>
                    <a
                        href="#"
                        class="flex items-center gap-3 rounded-lg px-3 py-3 text-slate-200 transition hover:bg-slate-800 hover:text-white"
                    >
                        <span class="inline-flex h-8 w-8 items-center justify-center rounded-md bg-slate-800 text-lg">📈</span>
                        Reportes
                    </a>
                </nav>
                <div class="px-6 py-4 text-xs text-slate-400">
                    &copy; {{ date('Y') }} Control Finanzas
                </div>
            </aside>

            <main class="flex-1 px-10 py-10">
                <header class="flex flex-col gap-2 sm:flex-row sm:items-center sm:justify-between">
                    <div>
                        <h1 class="text-3xl font-semibold text-slate-900">Dashboard financiero</h1>
                        <p class="text-sm text-slate-500">
                            Resumen general de tus cuentas, gastos y metas de ahorro.
                        </p>
                    </div>
                    <button class="inline-flex items-center gap-2 rounded-lg bg-slate-900 px-4 py-2 text-sm font-semibold text-white shadow hover:bg-slate-800">
                        Generar reporte rápido
                    </button>
                </header>

                <section class="mt-10 grid gap-6 md:grid-cols-2 xl:grid-cols-3">
                    <article class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-900/10">
                        <h2 class="text-sm font-medium text-slate-500">Balance actual</h2>
                        <p class="mt-4 text-3xl font-semibold text-slate-900">$ 12,450.00</p>
                        <p class="mt-2 text-xs text-emerald-600">+ $1,240 respecto al mes pasado</p>
                    </article>

                    <article class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-900/10">
                        <h2 class="text-sm font-medium text-slate-500">Gasto mensual</h2>
                        <p class="mt-4 text-3xl font-semibold text-slate-900">$ 3,280.00</p>
                        <p class="mt-2 text-xs text-rose-500">- $450 de margen disponible</p>
                    </article>

                    <article class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-900/10">
                        <h2 class="text-sm font-medium text-slate-500">Ahorro objetivo</h2>
                        <p class="mt-4 text-3xl font-semibold text-slate-900">$ 8,000.00</p>
                        <div class="mt-4 h-2 rounded-full bg-slate-200">
                            <div class="h-full w-3/4 rounded-full bg-emerald-500"></div>
                        </div>
                        <p class="mt-2 text-xs text-slate-500">75% completado</p>
                    </article>

                    <article class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-900/10 md:col-span-2 xl:col-span-1">
                        <h2 class="text-sm font-medium text-slate-500">Próximos pagos</h2>
                        <ul class="mt-4 space-y-3 text-sm text-slate-600">
                            <li class="flex items-center justify-between">
                                <span>Hipoteca</span>
                                <span class="font-semibold text-slate-900">$ 950 · 12/05</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <span>Servicios</span>
                                <span class="font-semibold text-slate-900">$ 120 · 15/05</span>
                            </li>
                            <li class="flex items-center justify-between">
                                <span>Tarjeta de crédito</span>
                                <span class="font-semibold text-slate-900">$ 450 · 28/05</span>
                            </li>
                        </ul>
                    </article>

                    <article class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-900/10 md:col-span-2 xl:col-span-2">
                        <h2 class="text-sm font-medium text-slate-500">Distribución de gastos</h2>
                        <div class="mt-6 grid gap-4 text-sm text-slate-600 sm:grid-cols-2 lg:grid-cols-4">
                            <div class="rounded-xl border border-slate-200 p-4">
                                <p class="text-xs uppercase tracking-wide text-slate-400">Vivienda</p>
                                <p class="mt-2 text-lg font-semibold text-slate-900">35%</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 p-4">
                                <p class="text-xs uppercase tracking-wide text-slate-400">Transporte</p>
                                <p class="mt-2 text-lg font-semibold text-slate-900">18%</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 p-4">
                                <p class="text-xs uppercase tracking-wide text-slate-400">Alimentación</p>
                                <p class="mt-2 text-lg font-semibold text-slate-900">22%</p>
                            </div>
                            <div class="rounded-xl border border-slate-200 p-4">
                                <p class="text-xs uppercase tracking-wide text-slate-400">Ocio</p>
                                <p class="mt-2 text-lg font-semibold text-slate-900">10%</p>
                            </div>
                        </div>
                    </article>
                </section>
            </main>
        </div>
    </body>
</html>
