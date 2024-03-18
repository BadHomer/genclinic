import {createApi, fetchBaseQuery} from "@reduxjs/toolkit/query/react";
import {ISpecialistsItem} from "@/core/entities/ISpecialistsItem";

interface ISpecs extends Array<ISpecialistsItem>{}
interface ISpecsResponse {
    specs: ISpecs,
}
export const specsApi = createApi({
    reducerPath: 'specsApi',
    baseQuery: fetchBaseQuery({
        baseUrl: 'http://api.gena-clinic.local/api/v1',
    }),
    tagTypes: ['Specs'],
    endpoints: (builder) => ({
        // The query accepts a number and returns a Post
        getSpecs: builder.query<ISpecsResponse, number>({
            // note: an optional `queryFn` may be used in place of `query`
            query: () => ({
                url: `/doctors/?`,
            }),

            providesTags: (result) =>
                result
                    ? [
                        ...result.specs.map(({ id }: {id: number}) => ({ type: 'Specs' as const, id })),
                        { type: 'Specs', id: 'LIST' },
                    ]
                    : [{ type: 'Specs', id: 'LIST' }],
        }),

    })
})

export const  {useGetSpecsQuery} = specsApi;
