import {createApi, fetchBaseQuery} from "@reduxjs/toolkit/query/react";
import {INewsItem} from "@/core/entities/INewsItem";

interface INews extends Array<INewsItem>{}
interface INewsResponse {
    news: INews,
}
export const newsApi = createApi({
    reducerPath: 'newsApi',
    baseQuery: fetchBaseQuery({
        baseUrl: 'http://api.gena-clinic.local/api/v1',
    }),
    tagTypes: ['News'],
    endpoints: (builder) => ({
        // The query accepts a number and returns a Post
        getNews: builder.query<INewsResponse, number>({
            // note: an optional `queryFn` may be used in place of `query`
            query: () => ({
                url: `/news/?`,
            }),

            providesTags: (result) =>
                result
                    ? [
                        ...result.news.map(({ id }: {id: number}) => ({ type: 'News' as const, id })),
                        { type: 'News', id: 'LIST' },
                    ]
                    : [{ type: 'News', id: 'LIST' }],
        }),

    })
})

export const  {useGetNewsQuery} = newsApi;
