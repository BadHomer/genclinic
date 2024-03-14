import '@/styles/components/index/news.scss'


import {IndexNewsCard} from "@/components/news/IndexNewsCard";
import {news} from '@/mokData/news';
export function IndexNews(props : {end : number}) {
    return (
        <>
            <section className="news">
                <h2>Новости</h2>

                <div className="news-cards-container">
                    {news.slice(0,props.end).map(
                        newsItem => <IndexNewsCard newsItem={newsItem} key={newsItem.id}/>

                    )}
                </div>

                <a href="/news" className="primary-btn more-btn">Посмотреть все</a>
            </section>
        </>
    );
}
