import tempImg from "@/assets/images/indexPage/news-temp.jpg";
import {INewsItem} from "@/core/entities/INewsItem";



export function IndexNewsCard(props : {newsItem : INewsItem}) {

    return (
        <>
            <div className="news-card">
                <img src={props.newsItem.img_path ? props.newsItem.img_path : tempImg}/>
                <div className="news-card-title-date">
                    <h3>{props.newsItem.title}</h3>
                    <p className="news-card-date">{props.newsItem.created_at}</p>
                </div>
                <p>{props.newsItem.text}</p>

            </div>
        </>
    );
}
