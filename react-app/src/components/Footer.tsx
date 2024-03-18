import "@/styles/footer.scss"
import {useState} from "react";
import {Button} from "@/components/ui/Button";

export function Footer() {
    const [, setOpenRecordModal] = useState(false);
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
                    <Button classes={"primary-btn btn-recording footer-btn-recording"} onClick={()=> {setOpenRecordModal(true)}}>Записаться на прием</Button>
                </div>
                <a href="/">Политика конфиденциальности</a>
            </footer>

        </>
    );
}
