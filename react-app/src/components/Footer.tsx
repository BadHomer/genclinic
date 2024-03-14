import "@/styles/footer.scss"

export function Footer() {
    return (
        <>
            <footer>
                <div className="footer-container">
                    <div className="footer-navbar">
                        <div className="footer-navbar-item">
                            <a href="/news">Новости</a>
                            <a href="/specs">Специалисты</a>
                        </div>
                        <div className="footer-navbar-item">
                            <p>Горячая линия</p>
                            <a className="navbar-tel" href="tel:">+7 (977) 407-10-45</a>
                        </div>
                        <div className="footer-navbar-item">
                            <a href="/vacancies">Вакансии</a>
                            <a href="/contacts">Контакты</a>
                        </div>
                    </div>
                    <button className="primary-btn btn-recording footer-btn-recording">Записаться на прием</button>
                </div>
                <a href="static">Политика конфиденциальности</a>
            </footer>

        </>
    );
}
