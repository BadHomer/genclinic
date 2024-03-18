import '@/styles/components/index/news.scss'


import {IndexNewsCard} from "@/components/news/IndexNewsCard";
import {useGetNewsQuery} from "@/core/api/newsApi";
/*import CircularProgress, {
    circularProgressClasses,
    CircularProgressProps,
} from '@mui/material/CircularProgress';
import {Box} from "@mui/material";*/
// TODO: custom preloader
export function IndexNews(props: { end: number }) {
    const {data, isLoading} = useGetNewsQuery(0);
    const loading = () => {
        console.log(isLoading);
        /*if (isLoading) {
            return <Box sx={{ display: 'flex', minWidth: '100%', justifyContent: 'center', padding: '50rem'}}>
                <CircularProgress />
            </Box>
        }*/

        return (<>
            <div className="news-cards-container">
                {data?.news.slice(0, props.end).map(
                    newsItem => <IndexNewsCard newsItem={newsItem} key={newsItem.id}/>
                )}
            </div>

            <a href="/news" className="primary-btn more-btn">Посмотреть все</a>
        </>)
    }
    return (
        <>
            <section className="news">
                <h2>Новости</h2>
                {loading()}

            </section>
        </>
    );
}
