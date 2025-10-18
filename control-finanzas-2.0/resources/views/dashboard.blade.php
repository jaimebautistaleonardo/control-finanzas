<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Control Finanzas · Panel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gradient-to-br from-slate-100 via-slate-200 to-slate-100 font-sans antialiased">
        <div class="min-h-screen flex bg-slate-900/5">
            <aside class="hidden w-72 shrink-0 flex-col bg-slate-950 text-slate-100 shadow-2xl shadow-slate-900/30 lg:flex">
                <div class="px-8 pb-6 pt-10">
                    <p class="text-xs uppercase tracking-[0.4em] text-slate-500">Control</p>
                    <h1 class="mt-2 text-2xl font-semibold tracking-tight">Finanzas</h1>
                </div>
                <div class="mx-6 rounded-2xl bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 p-6 shadow-inner">
                    <p class="text-sm font-medium text-slate-300">Balance general</p>
                    <p class="mt-4 text-3xl font-semibold text-white">$ 12,450.00</p>
                    <div class="mt-4 flex items-center gap-2 text-xs text-emerald-400">
                        <span class="inline-flex h-6 w-6 items-center justify-center rounded-full bg-emerald-500/10">▲</span>
                        + 9.8% vs. mes anterior
                    </div>
                </div>
                <nav class="mt-6 flex-1 space-y-1 px-4 text-sm font-medium">
                    <a
                        href="#"
                        class="flex items-center gap-3 rounded-xl bg-white/10 px-4 py-3 text-white shadow-sm shadow-slate-900/40"
                    >
                        <span class="inline-flex h-9 w-9 items-center justify-center rounded-lg bg-white/10 text-lg">🏠</span>
                        Dashboard
                    </a>
                    <a
                        href="#"
                        class="flex items-center gap-3 rounded-xl px-4 py-3 text-slate-300 transition hover:bg-white/10 hover:text-white"
                    >
                        <span class="inline-flex h-9 w-9 items-center justify-center rounded-lg bg-white/5 text-lg">💳</span>
                        Transacciones
                    </a>
                    <a
                        href="#"
                        class="flex items-center gap-3 rounded-xl px-4 py-3 text-slate-300 transition hover:bg-white/10 hover:text-white"
                    >
                        <span class="inline-flex h-9 w-9 items-center justify-center rounded-lg bg-white/5 text-lg">📊</span>
                        Presupuestos
                    </a>
                    <a
                        href="#"
                        class="flex items-center gap-3 rounded-xl px-4 py-3 text-slate-300 transition hover:bg-white/10 hover:text-white"
                    >
                        <span class="inline-flex h-9 w-9 items-center justify-center rounded-lg bg-white/5 text-lg">🎯</span>
                        Metas de ahorro
                    </a>
                    <a
                        href="#"
                        class="flex items-center gap-3 rounded-xl px-4 py-3 text-slate-300 transition hover:bg-white/10 hover:text-white"
                    >
                        <span class="inline-flex h-9 w-9 items-center justify-center rounded-lg bg-white/5 text-lg">📈</span>
                        Reportes
                    </a>
                    <a
                        href="#"
                        class="mt-4 flex items-center gap-3 rounded-xl border border-dashed border-white/10 px-4 py-3 text-slate-200 transition hover:border-white/30 hover:text-white"
                    >
                        <span class="inline-flex h-9 w-9 items-center justify-center rounded-lg bg-white/5 text-lg">⚙️</span>
                        Configuración
                    </a>
                </nav>
                <div class="px-8 pb-10">
                    <button class="w-full rounded-xl bg-white px-4 py-3 text-sm font-semibold text-slate-900 shadow-lg shadow-emerald-500/20 transition hover:shadow-xl">
                        + Nueva transacción
                    </button>
                    <p class="mt-6 text-xs text-slate-500">&copy; {{ date('Y') }} Control Finanzas</p>
                </div>
            </aside>

            <main class="flex-1 px-6 py-8 sm:px-8 lg:px-14">
                <div class="mb-8 flex items-center justify-between lg:hidden">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.4em] text-slate-400">Control Finanzas</p>
                        <h1 class="mt-2 text-2xl font-semibold tracking-tight text-slate-900">Tu panel personal</h1>
                    </div>
                    <button class="inline-flex items-center justify-center rounded-xl bg-slate-900 px-4 py-2 text-xs font-semibold text-white shadow-lg shadow-slate-900/30">
                        + Nueva transacción
                    </button>
                </div>

                <header class="flex flex-col gap-6 lg:flex-row lg:items-center lg:justify-between">
                    <div class="space-y-2">
                        <p class="text-sm font-semibold uppercase tracking-[0.4em] text-slate-400">Resumen</p>
                        <h2 class="text-4xl font-semibold tracking-tight text-slate-900">
                            Buenas noticias para tu salud financiera
                        </h2>
                        <p class="max-w-2xl text-sm leading-relaxed text-slate-600">
                            Visualiza cómo se comporta tu flujo de dinero, identifica oportunidades de ahorro y mantén tus objetivos al alcance con información clara y accionable.
                        </p>
                    </div>
                    <div class="flex w-full flex-col gap-3 rounded-2xl border border-slate-200 bg-white p-5 text-sm text-slate-600 shadow-lg shadow-slate-900/5 lg:w-72">
                        <div class="flex items-center justify-between">
                            <span class="font-semibold text-slate-500">Corte al día</span>
                            <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700">En verde</span>
                        </div>
                        <p class="text-3xl font-semibold text-slate-900">$ 2,130.40</p>
                        <p class="text-xs text-slate-500">Disponibles para presupuestos esta semana.</p>
                        <button class="inline-flex items-center justify-center gap-2 rounded-lg bg-slate-900 px-4 py-2 text-xs font-semibold text-white shadow transition hover:-translate-y-0.5 hover:bg-slate-800">
                            Generar reporte rápido
                        </button>
                    </div>
                </header>

                <section class="mt-10 flex flex-wrap items-center gap-3">
                    <span class="text-xs font-semibold uppercase tracking-[0.3em] text-slate-400">Período</span>
                    <div class="flex flex-wrap gap-2">
                        <button class="rounded-full border border-slate-900/10 bg-white px-4 py-2 text-xs font-semibold text-slate-600 shadow-sm transition hover:border-slate-900/20 hover:text-slate-900">Hoy</button>
                        <button class="rounded-full border border-transparent bg-slate-900 px-4 py-2 text-xs font-semibold text-white shadow-sm shadow-slate-900/30">Últimos 7 días</button>
                        <button class="rounded-full border border-slate-900/10 bg-white px-4 py-2 text-xs font-semibold text-slate-600 shadow-sm transition hover:border-slate-900/20 hover:text-slate-900">Este mes</button>
                        <button class="rounded-full border border-slate-900/10 bg-white px-4 py-2 text-xs font-semibold text-slate-600 shadow-sm transition hover:border-slate-900/20 hover:text-slate-900">Trimestre</button>
                    </div>
                </section>

                <section class="mt-8 grid gap-6 xl:grid-cols-4">
                    <article class="rounded-3xl border border-slate-200 bg-white/80 p-6 shadow-lg shadow-slate-900/5 backdrop-blur">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="text-sm font-semibold text-slate-500">Ingresos este mes</h3>
                                <p class="mt-4 text-3xl font-semibold text-slate-900">$ 9,780.00</p>
                            </div>
                            <span class="rounded-full bg-emerald-100 px-3 py-1 text-xs font-semibold text-emerald-700">+ 12%</span>
                        </div>
                        <p class="mt-4 text-xs text-slate-500">Aumento respecto al promedio trimestral.</p>
                        <div class="mt-5 h-2 w-full rounded-full bg-slate-100">
                            <div class="h-full w-4/5 rounded-full bg-gradient-to-r from-emerald-400 to-emerald-600"></div>
                        </div>
                    </article>
                    <article class="rounded-3xl border border-slate-200 bg-white/80 p-6 shadow-lg shadow-slate-900/5 backdrop-blur">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="text-sm font-semibold text-slate-500">Gastos controlados</h3>
                                <p class="mt-4 text-3xl font-semibold text-slate-900">$ 3,280.00</p>
                            </div>
                            <span class="rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-600">- 6%</span>
                        </div>
                        <p class="mt-4 text-xs text-slate-500">Sigues por debajo del presupuesto planeado.</p>
                        <div class="mt-5 h-2 w-full rounded-full bg-slate-100">
                            <div class="h-full w-2/3 rounded-full bg-gradient-to-r from-amber-400 to-amber-600"></div>
                        </div>
                    </article>
                    <article class="rounded-3xl border border-slate-200 bg-white/80 p-6 shadow-lg shadow-slate-900/5 backdrop-blur">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="text-sm font-semibold text-slate-500">Metas cumplidas</h3>
                                <p class="mt-4 text-3xl font-semibold text-slate-900">3 de 5</p>
                            </div>
                            <span class="rounded-full bg-violet-100 px-3 py-1 text-xs font-semibold text-violet-600">+ 1</span>
                        </div>
                        <p class="mt-4 text-xs text-slate-500">Completaste “Fondo de emergencia” hace 4 días.</p>
                        <div class="mt-5 h-2 w-full rounded-full bg-slate-100">
                            <div class="h-full w-3/5 rounded-full bg-gradient-to-r from-violet-400 to-violet-600"></div>
                        </div>
                    </article>
                    <article class="rounded-3xl border border-slate-200 bg-white/80 p-6 shadow-lg shadow-slate-900/5 backdrop-blur">
                        <div class="flex items-start justify-between">
                            <div>
                                <h3 class="text-sm font-semibold text-slate-500">Índice de bienestar</h3>
                                <p class="mt-4 text-3xl font-semibold text-slate-900">87/100</p>
                            </div>
                            <span class="rounded-full bg-sky-100 px-3 py-1 text-xs font-semibold text-sky-600">↑ estable</span>
                        </div>
                        <p class="mt-4 text-xs text-slate-500">Mantienes una buena distribución entre ahorro, inversión y estilo de vida.</p>
                        <div class="mt-6 grid gap-3 text-xs text-slate-600">
                            <div class="flex items-center justify-between">
                                <span>Ahorro</span>
                                <span class="font-semibold text-slate-900">34%</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span>Inversión</span>
                                <span class="font-semibold text-slate-900">26%</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span>Estilo de vida</span>
                                <span class="font-semibold text-slate-900">40%</span>
                            </div>
                        </div>
                    </article>
                </section>

                <section class="mt-10 grid gap-6 lg:grid-cols-5">
                    <article class="lg:col-span-3 rounded-3xl border border-slate-200 bg-white/80 p-6 shadow-xl shadow-slate-900/5 backdrop-blur">
                        <div class="flex flex-wrap items-center justify-between gap-4">
                            <div>
                                <h3 class="text-sm font-semibold text-slate-500">Flujo de caja</h3>
                                <p class="mt-2 text-2xl font-semibold text-slate-900">Tendencia semanal</p>
                            </div>
                            <div class="flex items-center gap-2 text-xs text-slate-400">
                                <span class="inline-flex h-2 w-2 rounded-full bg-emerald-500"></span> Ingresos
                                <span class="inline-flex h-2 w-2 rounded-full bg-rose-500"></span> Gastos
                            </div>
                        </div>
                        <div class="mt-6 h-52 rounded-2xl bg-gradient-to-br from-slate-50 via-white to-slate-100">
                            <div class="grid h-full grid-cols-7 gap-2 p-4 text-[10px] font-semibold uppercase tracking-[0.3em] text-slate-400">
                                <div class="flex flex-col justify-end gap-2">
                                    <div class="h-24 rounded-t-2xl bg-emerald-400"></div>
                                    <div class="h-12 rounded-t-2xl bg-rose-400"></div>
                                    <span>Lu</span>
                                </div>
                                <div class="flex flex-col justify-end gap-2">
                                    <div class="h-28 rounded-t-2xl bg-emerald-400"></div>
                                    <div class="h-16 rounded-t-2xl bg-rose-400"></div>
                                    <span>Ma</span>
                                </div>
                                <div class="flex flex-col justify-end gap-2">
                                    <div class="h-20 rounded-t-2xl bg-emerald-400"></div>
                                    <div class="h-14 rounded-t-2xl bg-rose-400"></div>
                                    <span>Mi</span>
                                </div>
                                <div class="flex flex-col justify-end gap-2">
                                    <div class="h-32 rounded-t-2xl bg-emerald-400"></div>
                                    <div class="h-[4.5rem] rounded-t-2xl bg-rose-400"></div>
                                    <span>Ju</span>
                                </div>
                                <div class="flex flex-col justify-end gap-2">
                                    <div class="h-36 rounded-t-2xl bg-emerald-400"></div>
                                    <div class="h-20 rounded-t-2xl bg-rose-400"></div>
                                    <span>Vi</span>
                                </div>
                                <div class="flex flex-col justify-end gap-2">
                                    <div class="h-[7.5rem] rounded-t-2xl bg-emerald-400"></div>
                                    <div class="h-[4.5rem] rounded-t-2xl bg-rose-400"></div>
                                    <span>Sa</span>
                                </div>
                                <div class="flex flex-col justify-end gap-2">
                                    <div class="h-[6.5rem] rounded-t-2xl bg-emerald-400"></div>
                                    <div class="h-16 rounded-t-2xl bg-rose-400"></div>
                                    <span>Do</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 grid gap-4 text-sm text-slate-600 sm:grid-cols-2">
                            <div class="flex items-center gap-3 rounded-2xl bg-slate-50 p-4">
                                <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-emerald-500/10 text-lg">📈</span>
                                <div>
                                    <p class="text-xs uppercase tracking-wide text-slate-400">Mayor ingreso</p>
                                    <p class="text-sm font-semibold text-slate-900">Pago freelance · $ 1,800</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3 rounded-2xl bg-slate-50 p-4">
                                <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-rose-500/10 text-lg">🛍️</span>
                                <div>
                                    <p class="text-xs uppercase tracking-wide text-slate-400">Gasto relevante</p>
                                    <p class="text-sm font-semibold text-slate-900">Compra mensual · $ 620</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="lg:col-span-2 flex flex-col gap-4 rounded-3xl border border-slate-200 bg-white/80 p-6 shadow-xl shadow-slate-900/5 backdrop-blur">
                        <div>
                            <h3 class="text-sm font-semibold text-slate-500">Próximos pagos</h3>
                            <p class="mt-2 text-xl font-semibold text-slate-900">Planifica antes de las fechas límite</p>
                        </div>
                        <ul class="space-y-4 text-sm text-slate-600">
                            <li class="flex items-center justify-between rounded-2xl border border-slate-200 bg-white px-4 py-3 shadow-sm">
                                <div>
                                    <p class="font-semibold text-slate-900">Hipoteca</p>
                                    <p class="text-xs text-slate-500">12 de mayo · Pago mensual</p>
                                </div>
                                <span class="text-sm font-semibold text-slate-900">$ 950</span>
                            </li>
                            <li class="flex items-center justify-between rounded-2xl border border-slate-200 bg-white px-4 py-3 shadow-sm">
                                <div>
                                    <p class="font-semibold text-slate-900">Servicios</p>
                                    <p class="text-xs text-slate-500">15 de mayo · Luz, agua, internet</p>
                                </div>
                                <span class="text-sm font-semibold text-slate-900">$ 120</span>
                            </li>
                            <li class="flex items-center justify-between rounded-2xl border border-slate-200 bg-white px-4 py-3 shadow-sm">
                                <div>
                                    <p class="font-semibold text-slate-900">Tarjeta de crédito</p>
                                    <p class="text-xs text-slate-500">28 de mayo · Corte mensual</p>
                                </div>
                                <span class="text-sm font-semibold text-slate-900">$ 450</span>
                            </li>
                        </ul>
                        <button class="mt-auto inline-flex items-center justify-center gap-2 rounded-lg border border-dashed border-slate-300 px-4 py-2 text-xs font-semibold text-slate-600 transition hover:border-slate-400 hover:text-slate-900">
                            + Agendar recordatorio
                        </button>
                    </article>
                </section>

                <section class="mt-10 grid gap-6 xl:grid-cols-2">
                    <article class="rounded-3xl border border-slate-200 bg-white/90 p-6 shadow-lg shadow-slate-900/5 backdrop-blur">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-sm font-semibold text-slate-500">Actividad reciente</h3>
                                <p class="mt-2 text-xl font-semibold text-slate-900">Últimos movimientos registrados</p>
                            </div>
                            <a href="#" class="text-xs font-semibold text-slate-500 underline-offset-4 hover:text-slate-900 hover:underline">Ver todo</a>
                        </div>
                        <ul class="mt-6 space-y-3 text-sm text-slate-600">
                            <li class="flex items-center justify-between rounded-2xl bg-slate-50 px-4 py-3">
                                <div class="flex items-center gap-3">
                                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-emerald-500/10 text-lg">💼</span>
                                    <div>
                                        <p class="font-semibold text-slate-900">Salario mensual</p>
                                        <p class="text-xs text-slate-500">Ingreso · Hace 2 días</p>
                                    </div>
                                </div>
                                <span class="font-semibold text-emerald-600">+ $ 3,500</span>
                            </li>
                            <li class="flex items-center justify-between rounded-2xl bg-slate-50 px-4 py-3">
                                <div class="flex items-center gap-3">
                                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-rose-500/10 text-lg">🍽️</span>
                                    <div>
                                        <p class="font-semibold text-slate-900">Restaurante</p>
                                        <p class="text-xs text-slate-500">Gasto ocio · Hace 1 día</p>
                                    </div>
                                </div>
                                <span class="font-semibold text-rose-600">- $ 68</span>
                            </li>
                            <li class="flex items-center justify-between rounded-2xl bg-slate-50 px-4 py-3">
                                <div class="flex items-center gap-3">
                                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-violet-500/10 text-lg">📈</span>
                                    <div>
                                        <p class="font-semibold text-slate-900">Aporte inversión</p>
                                        <p class="text-xs text-slate-500">Transferencia · Hace 4 horas</p>
                                    </div>
                                </div>
                                <span class="font-semibold text-emerald-600">+ $ 420</span>
                            </li>
                            <li class="flex items-center justify-between rounded-2xl bg-slate-50 px-4 py-3">
                                <div class="flex items-center gap-3">
                                    <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-amber-500/10 text-lg">🧾</span>
                                    <div>
                                        <p class="font-semibold text-slate-900">Factura servicios</p>
                                        <p class="text-xs text-slate-500">Servicios · Hace 30 minutos</p>
                                    </div>
                                </div>
                                <span class="font-semibold text-rose-600">- $ 95</span>
                            </li>
                        </ul>
                    </article>
                    <article class="rounded-3xl border border-slate-200 bg-white/90 p-6 shadow-lg shadow-slate-900/5 backdrop-blur">
                        <div class="flex items-center justify-between">
                            <div>
                                <h3 class="text-sm font-semibold text-slate-500">Metas de ahorro</h3>
                                <p class="mt-2 text-xl font-semibold text-slate-900">Sigue construyendo tu futuro</p>
                            </div>
                            <button class="rounded-full border border-slate-200 px-3 py-1 text-xs font-semibold text-slate-500 transition hover:border-slate-300 hover:text-slate-900">+ Crear meta</button>
                        </div>
                        <div class="mt-6 space-y-5 text-sm text-slate-600">
                            <div class="rounded-2xl border border-slate-100 bg-slate-50 p-4">
                                <div class="flex items-center justify-between">
                                    <p class="font-semibold text-slate-900">Fondo de emergencia</p>
                                    <span class="text-xs font-semibold text-emerald-600">80% completado</span>
                                </div>
                                <p class="mt-1 text-xs text-slate-500">Objetivo: $ 5,000 · Fecha meta: agosto 2024</p>
                                <div class="mt-3 h-2 rounded-full bg-white">
                                    <div class="h-full w-[80%] rounded-full bg-gradient-to-r from-emerald-400 to-emerald-600"></div>
                                </div>
                            </div>
                            <div class="rounded-2xl border border-slate-100 bg-slate-50 p-4">
                                <div class="flex items-center justify-between">
                                    <p class="font-semibold text-slate-900">Viaje familiar</p>
                                    <span class="text-xs font-semibold text-sky-600">45% completado</span>
                                </div>
                                <p class="mt-1 text-xs text-slate-500">Objetivo: $ 3,200 · Fecha meta: diciembre 2024</p>
                                <div class="mt-3 h-2 rounded-full bg-white">
                                    <div class="h-full w-[45%] rounded-full bg-gradient-to-r from-sky-400 to-sky-600"></div>
                                </div>
                            </div>
                            <div class="rounded-2xl border border-slate-100 bg-slate-50 p-4">
                                <div class="flex items-center justify-between">
                                    <p class="font-semibold text-slate-900">Remodelación hogar</p>
                                    <span class="text-xs font-semibold text-violet-600">20% completado</span>
                                </div>
                                <p class="mt-1 text-xs text-slate-500">Objetivo: $ 10,000 · Fecha meta: marzo 2025</p>
                                <div class="mt-3 h-2 rounded-full bg-white">
                                    <div class="h-full w-[20%] rounded-full bg-gradient-to-r from-violet-400 to-violet-600"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 rounded-2xl bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 p-5 text-white">
                            <p class="text-sm font-semibold tracking-wide text-white/70">Consejo personalizado</p>
                            <p class="mt-3 text-base leading-relaxed text-white/90">
                                Destina un 5% adicional de tus ingresos variables a tu meta de viaje. Así llegarás un mes antes de lo planeado sin comprometer tu fondo de emergencia.
                            </p>
                        </div>
                    </article>
                </section>
            </main>
        </div>
    </body>
</html>
