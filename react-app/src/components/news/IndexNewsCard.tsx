import tempImg from "@/assets/images/indexPage/news-temp.jpg";
import {INewsItem} from "@/core/entities/INewsItem";

export function IndexNewsCard(props : {newsItem : INewsItem}) {
    return (
        <>
            <div className="news-card">
                <img src={props.newsItem.imgPath ? props.newsItem.imgPath : tempImg}/>
                <div className="news-card-title-date">
                    <h3>{props.newsItem.title}</h3>
                    <p className="news-card-date">{props.newsItem.date}</p>
                </div>
                <p>{props.newsItem.description}</p>

            </div>
        </>
    );
}
