function logout(){
    if (confirm("Deseja realmente deslogar?")) {
        window.location.href = "http://localhost/tcc-escolar/tcc-escolar/formularios/deslogar.php"; // Redireciona para a página de logout
    }
}