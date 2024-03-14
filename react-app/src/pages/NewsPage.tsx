import {news} from "@/mokData/news";
import {IndexNewsCard} from "@/components/news/IndexNewsCard";
import '@/styles/pages/news.scss';

export function NewsPage() {
    document.title = 'Новости';

    return (
        <>
            <h1 className="page-title">Новости</h1>
            <section className="news">


                <div className="news-cards-container">
                    {news.map(
                        newsItem => <IndexNewsCard newsItem={newsItem} key={newsItem.id}/>

                    )}
                </div>
            </section>

        </>
    );
}
