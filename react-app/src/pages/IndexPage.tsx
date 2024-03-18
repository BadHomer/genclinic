import {IndexSpecs} from "@/components/specialists/IndexSpecs";
import {IndexNews} from "@/components/news/IndexNews";

import "@/styles/pages/index.css";

import aboutImg1 from "@/assets/images/indexPage/about-img-1.jpg";
import aboutImg2 from "@/assets/images/indexPage/about-img-2.jpg";
import aboutImg3 from "@/assets/images/indexPage/about-img-3.jpg";
import mainHero from '@/assets/images/indexPage/main-hero.jpg';
import {Modal} from "@/components/ui/Modal";
import {Button} from "@/components/ui/Button";
import {useAppDispatch} from "@/core/hooks/storeHooks";
import {openModal} from "@/core/store/recordModalState/recordModalStateReducer";

export function IndexPage() {

    const dispatch = useAppDispatch();

    document.title = 'Городская клиническая больница';
    console.log(open);
    return (
        <>
            <section className="hero">
                <h1 className="hero-title-1">Городская клиническая</h1>
                <h1 className="hero-title-2">Больница</h1>
                <img className="hero-img" src={mainHero}/>
                <div className="hero-hot-line">
                    <p className="hero-hot-line-text">Горячая линия</p>
                    <a href="tel:">+7 (977) 407-10-45</a>
                    <Button classes={'primary-btn btn-recording'} onClick={()=> {dispatch(openModal())}}>Записаться на прием</Button>
                </div>
            </section>

            <IndexNews end={3}/>
            <section className="about">
                <div className="about-main">
                    <p className="about-hint">О медицинском центре</p>
                    <h2>Клиническая больница им. святого Луки</h2>

                    <p className="about-col-3-4">Задача организации, в особенности же рамки и место обучения кадров
                        позволяет
                        выполнять
                        важные задания по разработке новых предложений. </p>
                    <p className="about-col-2-3">Повседневная практика показывает, что консультация с широким активом
                        представляет
                        собой
                        интересный эксперимент проверки позиций, занимаемых участниками в отношении поставленных
                        задач.</p>
                    <p className="about-col-2-2">Значимость этих проблем настолько очевидна, что начало повседневной
                        работы по
                        формированию позиции позволяет
                        оценить значение позиций, занимаемых участниками в отношении поставленных задач. Разнообразный и
                        богатый
                        опыт реализация намеченных</p>
                    <p className="about-col-3-3">плановых заданий позволяет выполнять важные задания по разработке
                        дальнейших
                        направлений развития. Повседневная практика показывает, что сложившаяся структура организации
                        способствует
                        подготовки и реализации систем массового участия. </p>
                    <div className="about-img-c">
                        <img src={aboutImg1}/>
                        <img src={aboutImg2}/>
                        <img className="about-main-big-img" src={aboutImg3}/>
                    </div>
                </div>
            </section>

            <Modal> 1</Modal>
            <IndexSpecs />
        </>
    );
}
