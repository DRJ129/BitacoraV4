<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bitácora - Dashboard</title>
    <style>
        :root {
            --red-1: #E22227;
            --red-2: #C7080C;
            --dark-1: #222B31;
            --muted: #55666E;
            --card-bg: rgba(34, 43, 49, 0.95);
            --sidebar-bg: rgba(20, 26, 29, 0.95);
            --glass-border: rgba(255, 255, 255, 0.03);
        }

        html,
        body {
            height: 100%;
            margin: 0;
            font-family: Segoe UI, Roboto, Helvetica, Arial, sans-serif;
            background: linear-gradient(180deg, var(--dark-1) 0%, #16181a 60%);
            color: #e6eef2
        }

        .wrap {
            min-height: 100%;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .outer {
            width: 100%;
            max-width: 1300px;
            border-radius: 14px;
            padding: 18px;
            background: transparent
        }

        .inner {
            background: var(--card-bg);
            border-radius: 12px;
            padding: 18px;
            display: flex;
            min-height: 620px;
            border: 1px solid var(--glass-border);
            box-shadow: 0 30px 70px rgba(0, 0, 0, 0.6)
        }

        .panel {
            background: var(--card-bg);
            padding: 20px;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.79)
        }

        .btn-add {
            background: linear-gradient(90deg, var(--red-1), var(--red-2));
            color: #fff;
            padding: 8px 14px;
            border-radius: 8px;
            border: 0;
            font-weight: 700;
            margin-left: auto;
            cursor: pointer
        }

        .sidebar {
            width: 260px;
            background: var(--sidebar-bg);
            border-radius: 8px;
            padding: 22px;
            display: flex;
            flex-direction: column;
            gap: 18px
        }

        .brand {
            font-weight: 800;
            color: var(--red-1);
            font-size: 22px
        }

        .dept {
            font-size: 13px;
            color: #cbd5dd
        }

        .menu {
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-top: 10px
        }

        .menu a {
            color: #cbd5dd;
            text-decoration: none;
            padding: 10px 12px;
            border-radius: 8px;
            font-weight: 600
        }

        .menu a:hover {
            background: rgba(255, 255, 255, 0.02)
        }

        .menu .active {
            background: linear-gradient(90deg, var(--red-1), var(--red-2));
            color: #fff
        }


        .user-bottom {
            margin-top: auto;
            font-size: 14px;
            color: #cbd5dd
        }

        /* Main area */
        .main {
            flex: 1;
            padding-left: 28px;
            display: flex;
            flex-direction: column
        }

        .topbar {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 6px 0
        }

        .title-pill {
            background: rgba(255, 255, 255, 0.03);
            padding: 10px 40px;
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.02);
            font-weight: 700
        }

        .content {
            margin-top: 18px;
            flex: 1;
            border-radius: 8px;
            padding: 18px;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.01), rgba(0, 0, 0, 0.03));
        }

        @media(max-width:980px) {
            .inner {
                flex-direction: column
            }

            .sidebar {
                width: 100%;
                flex-direction: row;
                gap: 12px;
                overflow: auto
            }

            .main {
                padding-left: 0
            }

            .topbar {
                justify-content: flex-start
            }
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 12px
        }

        th,
        td {
            padding: 12px 10px;
            text-align: left;
            border-bottom: 1px solid rgba(255, 255, 255, 0.02);
            color: #d1d5db
        }

        th {
            font-weight: 700;
            color: #9fb0b8
        }

        .actions {
            display: flex;
            gap: 8px
        }

        .action-btn {
            display: inline-block;
            text-decoration: none;
            font-weight: 700;
            padding: 6px 12px;
            border-radius: 6px;
            min-width: 80px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.03);
            background: transparent;
            color: #cbd5dd;
            cursor: pointer;
        }

        .action-btn.btn-edit {
            background: linear-gradient(90deg, var(--muted), #434e56);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.04);
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.4);
        }

        .action-btn.btn-delete {
            background: linear-gradient(90deg, var(--red-1), var(--red-2));
            color: #fff;
            border: 1px solid rgba(0, 0, 0, 0.25);
            box-shadow: 0 8px 24px rgba(200, 0, 0, 0.12);
        }
    </style>
</head>

<body>
    <div class="wrap">
        <div class="outer">
            <div class="inner">
                <aside class="sidebar">
                    <div>
                        <div class="brand">Bitácora</div>
                        <div class="dept">Departamento de redes y servidores</div>
                    </div>

                    <nav class="menu" aria-label="Menú principal">
                        <a href="#">Administrador</a>
                        <a href="#">Gestión</a>
                        <a href="#">Reportes</a>
                    </nav>
                    <div class="user-bottom" style="position:relative">
                        <a id="userBtn" style="background:transparent;border:0;color:#cbd5dd;font-weight:700;cursor:pointer">Usuario</a>
                        <div id="userSub" class="user-submenu">
                            </form>
                        </div>
                    </div>
                </aside>
                <main class="main">
                    <div class="topbar">
                        <div class="title-pill">Usuarios</div>
                    </div>
                    <div class="container">
                        <div class="panel">
                            <div class="head"style="display: flex; justify-content: flex-end;">

                                <a href="{{ route('admin.usuarios.create') }}" class="btn-add">Agregar</a>
                            </div>

                            @if(session('success'))
                            <div style="margin-bottom:10px;color:#bbffcc">{{ session('success') }}</div>
                            @endif

                            <table>
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Correo</th>
                                        <th>Rol</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $u)
                                    <tr>
                                        <td>{{ $u->name }}</td>
                                        <td>{{ $u->lastname }}</td>
                                        <td>{{ $u->email }}</td>
                                        <td>{{ $u->role ?? '-' }}</td>
                                        <td>
                                            <div class="actions">
                                                <a class="action-btn btn-edit" href="{{ route('admin.usuarios.edit', $u) }}">Editar</a>
                                                <form method="POST" action="{{ route('admin.usuarios.destroy', $u) }}" style="display:inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="action-btn btn-delete" onclick="return confirm('Eliminar usuario?')">Eliminar</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
</body>

</html>