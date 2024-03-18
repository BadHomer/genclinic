
import {IndexNewsCard} from "@/components/news/IndexNewsCard";
import '@/styles/pages/news.scss';
import {useGetNewsQuery} from "@/core/api/newsApi";

export function NewsPage() {
    document.title = 'Новости';

    const {data} = useGetNewsQuery(0);

    return (
        <>
            <h1 className="page-title">Новости</h1>
            <section className="news">


                <div className="news-cards-container">
                    {data?.news.map(
                        newsItem => <IndexNewsCard newsItem={newsItem} key={newsItem.id}/>

                    )}
                </div>
            </section>

        </>
    );
}
